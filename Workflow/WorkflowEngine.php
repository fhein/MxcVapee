<?php

namespace MxcVapee\Workflow;

use MxcCommons\Plugin\Service\ClassConfigAwareTrait;
use MxcCommons\Plugin\Service\DatabaseAwareTrait;
use MxcCommons\ServiceManager\AugmentedObject;
use MxcCommons\Toolbox\Shopware\DocumentRenderer;
use MxcCommons\Toolbox\Shopware\MailTool;
use MxcCommons\Toolbox\Shopware\OrderTool;
use MxcDropship\Dropship\DropshipManager;
use MxcDropship\Jobs\SendOrders;
use Shopware\Models\Order\Status;
use DateTime;

class WorkflowEngine implements AugmentedObject
{
    use ClassConfigAwareTrait;
    use DatabaseAwareTrait;

    /** @var MailTool */
    protected $mailer;

    /** @var SendOrders|null */
    protected $sendOrderJob;

    /** @var DropshipManager|null */
    protected $dropshipManager;

    /** @var OrderTool */
    protected $orderTool;

    public function __construct(MailTool $mailer, OrderTool $orderTool, ?SendOrders $sendOrderJob, ?DropshipManager $dropshipManager)
    {
        $this->mailer = $mailer;
        $this->sendOrderJob = $sendOrderJob;
        $this->dropshipManager = $dropshipManager;
        $this->orderTool = $orderTool;
    }

    public function run()
    {
        $this->processOpenOrders();
        $this->processInProgressOrders();
    }

    public function processOpenOrders()
    {
        $openOrders = $this->orderTool->getOrdersByStatus(Status::ORDER_STATE_OPEN);
        if (empty($openOrders)) return;

        foreach ($openOrders as $order) {
            // open orders which are completely paid by the customer are promoted to ORDER_STATE_IN_PROCESS
            $this->promotePaidOrder($order);
            $this->remindPrepayments($order);
            if ($this->dropshipManager === null) continue;
            $this->dropshipManager->initOrder($order['orderID']);
        }
        if ($this->sendOrderJob === null) return;
        $this->sendOrderJob->run();
    }

    // open orders which are completely paid by the customer are promoted to ORDER_STATE_IN_PROCESS
    protected function promotePaidOrder(array $order)
    {
        if ($order['cleared'] == Status::PAYMENT_STATE_COMPLETELY_PAID)
        {
            $statusId = Status::ORDER_STATE_IN_PROCESS;
            $orderId = $order['orderID'];
            $this->orderTool->setOrderStatus($orderId, $statusId);
            $this->mailer->sendStatusMail($orderId, $statusId);
        }
    }

    // open orders with prepayment will trigger a payment reminder mail to the customer
    // and a notification mail to the shop owner if the order is older than 3 days
    // payment status gets set to PAYMENT_STATE_1ST_REMINDER accordingly
    public function remindPrepayments(array $order)
    {
        if ($order['cleared'] != Status::PAYMENT_STATE_OPEN) return;
        if (! $this->orderTool->isPrepayment($order['paymentID'])) return;
        $date = new DateTime($order['ordertime']);
        $now = new DateTime();
        $diff = $date->diff($now);
        // if order date is more than 3 days in the past
        if ($diff->days > 3 && $diff->invert == 0) {
            $statusId = Status::PAYMENT_STATE_1ST_REMINDER;
            $orderId = $order['orderID'];
            $this->orderTool->setPaymentStatus($orderId, $statusId);
            $this->mailer->sendStatusMail($orderId, $statusId);
            $context = $this->getNotificationContext('PREPAYED_ORDER', 'reminder', $order);
            $this->mailer->sendNotificationMail(
                $orderId,
                $context,
                $this->classConfig['notification_address']
            );
        }
    }

    public function processInProgressOrders()
    {
        $inProgressOrders = $this->orderTool->getOrdersByStatus(Status::ORDER_STATE_IN_PROCESS);
        if (empty($inProgressOrders)) return;

        foreach ($inProgressOrders as $order) {
            $orderId = $order['orderID'];
            $trackingDataComplete = ! empty($order['trackingcode']);
            if ($this->dropshipManager !== null) {
                if ($this->dropshipManager->isClarificationRequired($order)) {
                    $this->orderTool->setOrderStatus($orderId, Status::ORDER_STATE_CLARIFICATION_REQUIRED);
                    continue;
                }
                $trackingDataComplete = $this->dropshipManager->isTrackingDataComplete($order);
            }
            if (! $trackingDataComplete) continue;
            $this->mailer->sendStatusMail($orderId, Status::ORDER_STATE_COMPLETELY_DELIVERED);
            $statusId = Status::ORDER_STATE_COMPLETED;
            $this->orderTool->setOrderStatus($orderId, $statusId);
            $this->mailer->sendStatusMail($orderId, $statusId, [DocumentRenderer::DOC_TYPE_INVOICE]);
            $context = $this->getNotificationContext('ORDER', 'closed', $order);
            $this->mailer->sendNotificationMail(
                $orderId,
                $context,
                $this->classConfig['notification_address'],
                [DocumentRenderer::DOC_TYPE_INVOICE]);
        }
    }

    public function getNotificationContext(string $group, string $topic, array $order = null)
    {
        $context = @$this->classConfig['notification_context'][$group][$topic];
        if ($context === null) {
            return null;
        }

        $replacements = [
            '{$orderNumber}' => @$order['ordernumber'] ?? '',
        ];

        foreach ($context as $group => $value) {
            if (! is_string($value)) {
                continue;
            }
            $context[$group] = str_replace(array_keys($replacements), array_values($replacements), $context[$group]);
        }
        return $context;
    }
}