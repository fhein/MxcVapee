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
        /** @var WorkflowEngine $engine */
        $engine = $e->getTarget();
        $orderId = $e->getParam('orderID');
        $order = $engine->getOrder($orderId);

        if ($order['cleared'] != Status::PAYMENT_STATE_COMPLETELY_PAID) return;

        $statusId = Status::ORDER_STATE_IN_PROCESS;
        $engine->setOrderStatus($orderId, $statusId);
        $engine->sendStatusMail($orderId, $statusId);
    }
}