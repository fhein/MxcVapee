<?php

namespace MxcVapee\Workflow;

use MxcCommons\Plugin\Service\ModelManagerAwareTrait;
use MxcCommons\ServiceManager\AugmentedObject;
use MxcCommons\Toolbox\Shopware\MailTool;
use MxcDropship\Jobs\SendOrders;
use Shopware\Models\Order\Order;
use Shopware\Models\Order\Status;

class WorkflowEngine implements AugmentedObject
{
    use ModelManagerAwareTrait;

    /** @var MailTool */
    protected $mailer;

    /** @var SendOrders|null */
    protected $sendOrders;

    public function __construct(MailTool $mailer, ?SendOrders $sendOrders)
    {
        $this->mailer = $mailer;
        $this->sendOrders = $sendOrders;
    }

    public function run()
    {
        $this->processOpenOrders();
        $this->processInProgressOrders();
    }

    public function processOpenOrders()
    {
        $repository = $this->modelManager->getRepository(Order::class);
        $openOrders = $repository->findBy(['orderStatus' => Status::ORDER_STATE_OPEN]);
        /** @var Order $order */
        foreach ($openOrders as $order) {
            // open orders which are completely paid by the customer are put
            if ($order->getPaymentStatus()->getId() == Status::PAYMENT_STATE_COMPLETELY_PAID)
            {
                // set new orderstatus
                $statusId = Status::ORDER_STATE_IN_PROCESS;
                $this->setOrderStatus($order, $statusId);
                $mail = $this->mailer->renderStatusMail($order, $statusId);
                $this->mailer->sendStatusMail($mail);
            }
        }
    }

    public function processInProgressOrders()
    {
        if ($this->sendOrders === null) return;
        // $this->sendOrders->run();
    }

    protected function setOrderStatus(Order $order, int $statusId)
    {
        /** @var Status $orderStatus */
        $orderStatus = $this->modelManager->getReference('\Shopware\Models\Order\Status', $statusId);
        $order->setOrderStatus($orderStatus);
        $this->modelManager->flush($order);
    }
}