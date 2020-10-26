<?php

namespace MxcVapee\WorkflowActions;

use MxcCommons\EventManager\EventInterface;
use MxcWorkflow\Workflow\WorkflowAction;
use MxcWorkflow\Workflow\WorkflowEngine;
use Shopware\Models\Order\Status;

class PromotePaidOrders extends WorkflowAction
{
    protected $config = [
        'statusId' => Status::ORDER_STATE_OPEN,
        'listener'    => __CLASS__,
        'priority' => 1,
    ];

    public function run(EventInterface $e)
    {
        $order = $e->getParam('order');
        if ($order['cleared'] != Status::PAYMENT_STATE_COMPLETELY_PAID) return;

        /** @var WorkflowEngine $engine */
        $engine = $e->getTarget();

        $statusId = Status::ORDER_STATE_IN_PROCESS;
        $orderId = $order['orderID'];
        $engine->setOrderStatus($orderId, $statusId);
        $engine->sendStatusMail($orderId, $statusId);
    }
}