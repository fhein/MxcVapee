<?php

namespace MxcVapee\WorkflowActions;

use MxcCommons\EventManager\EventInterface;
use MxcWorkflow\Workflow\WorkflowAction;
use MxcWorkflow\Workflow\WorkflowEngine;
use Shopware\Models\Order\Status;

class PromoteKlarnaOrders extends WorkflowAction
{
    protected $config = [
        'statusId' => Status::ORDER_STATE_OPEN,
        'listener'    => __CLASS__,
        'priority' => 2,
    ];

    public function run(EventInterface $e)
    {
        /** @var WorkflowEngine $engine */
        $engine = $e->getTarget();
        $orderId = $e->getParam('orderID');
        $order = $engine->getOrder($orderId);
        if ($order['status'] != $this->config['statusId']) return;

        // if there is no order number the order was cancelled by the customer
        if ($order['ordernumber'] == 0) return;

        // process Klarna orders only
        if (! $engine->isKlarna($order)) return;

        $statusId = Status::ORDER_STATE_IN_PROCESS;
        $engine->setOrderStatus($orderId, $statusId);
        $engine->setPaymentStatus($orderId, Status::PAYMENT_STATE_PARTIALLY_INVOICED);
        $engine->sendStatusMail($orderId, $statusId);
    }
}