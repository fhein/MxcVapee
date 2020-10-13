<?php

namespace MxcVapee\Workflow;

use MxcCommons\Plugin\Service\DatabaseAwareTrait;
use MxcCommons\Plugin\Service\ModelManagerAwareTrait;
use MxcCommons\ServiceManager\AugmentedObject;
use MxcCommons\Toolbox\Shopware\DocumentRenderer;
use MxcCommons\Toolbox\Shopware\MailTool;
use MxcDropship\Dropship\DropshipManager;
use MxcDropship\Jobs\SendOrders;
use Shopware\Models\Order\Order;
use Shopware\Models\Order\Status;

class WorkflowEngine implements AugmentedObject
{
    use ModelManagerAwareTrait;
    use DatabaseAwareTrait;

    /** @var MailTool */
    protected $mailer;

    /** @var SendOrders|null */
    protected $sendOrders;

    /** @var DropshipManager|null */
    protected $dropshipManager;

    public function __construct(MailTool $mailer, ?SendOrders $sendOrders, ?DropshipManager $dropshipManager)
    {
        $this->mailer = $mailer;
        $this->sendOrders = $sendOrders;
        $this->dropshipManager = $dropshipManager;
    }

    public function run()
    {
        $this->processOpenOrders();
        $this->processInProgressOrders();
    }

    public function processOpenOrders()
    {
        $openOrders = $this->getOrdersByStatus(Status::ORDER_STATE_OPEN);

        foreach ($openOrders as $order) {
            // open orders which are completely paid by the customer are put
            if ($order['cleared'] == Status::PAYMENT_STATE_COMPLETELY_PAID)
            {
                // set new orderstatus
                $statusId = Status::ORDER_STATE_IN_PROCESS;
                $orderId = $order['orderID'];
                $this->setOrderStatus($orderId, $statusId);
                $this->sendStatusMail($orderId, $statusId);
            }
        }
        if ($this->sendOrders === null) return;
        $this->sendOrders->run();
    }

    public function processInProgressOrders()
    {
        $inProgressOrders = $this->getOrdersByStatus(Status::ORDER_STATE_IN_PROCESS);

        foreach ($inProgressOrders as $order) {
            $orderId = $order['orderID'];
            if ($this->dropshipManager !== null) {
                // if order send failed with an unrecoverable error or order gets cancelled by InnoCigs
                $status = $this->dropshipManager->getDropshipStatus($order);
                $isError = $status > DropshipManager::DROPSHIP_STATUS_ERROR;
                if ($isError || $status == DropshipManager::DROPSHIP_STATUS_CANCELLED) {
                    $this->setOrderStatus($orderId, Status::ORDER_STATE_CLARIFICATION_REQUIRED);
                    continue;
                }
                $trackingDataComplete = $this->dropshipManager->isTrackingDataComplete($order);
            } else {
                $trackingDataComplete = ! empty($order['trackingcode']);
            }
            if (! $trackingDataComplete) continue;
            $this->sendStatusMail($orderId, Status::ORDER_STATE_COMPLETELY_DELIVERED);
            $statusId = Status::ORDER_STATE_COMPLETED;
            $this->setOrderStatus($orderId, $statusId);
            $this->sendStatusMail($orderId, $statusId, [DocumentRenderer::DOC_TYPE_INVOICE]);
        }
    }

    protected function getOrdersByStatus(int $statusId)
    {
        return $this->db->fetchAll('
            SELECT * FROM s_order o LEFT JOIN s_order_attributes oa ON oa.orderID = o.id 
            WHERE o.status = :orderStatus 
        ', [
            'orderStatus' => $statusId,
        ]);
    }

    protected function setOrderStatus(int $orderId, int $statusId)
    {
        $this->db->executeUpdate(
            'UPDATE s_order o SET o.status = :status WHERE o.id = :id',
           ['status'  => $statusId, 'id'      => $orderId]
        );
    }

    public function sendStatusMail(int $orderId, int $statusId, array $documentAttachments = [])
    {
        $mail = $this->mailer->renderStatusMail($orderId, $statusId);
        foreach ($documentAttachments as $typeId) {
            $this->mailer->attachOrderDocument($mail, $orderId, $typeId);
        }
        $this->mailer->sendStatusMail($mail);
    }
}