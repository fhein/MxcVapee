<?php

namespace MxcVapee\WorkflowActions;

use MxcCommons\EventManager\EventInterface;
use MxcWorkflow\Workflow\WorkflowAction;
use MxcWorkflow\Workflow\WorkflowEngine;
use Shopware\Models\Order\Status;

class RemindPrepayments extends WorkflowAction
{
    protected $config = [
        'statusId' => Status::ORDER_STATE_OPEN,
        'listener' => __CLASS__,
        'priority' => 200,
    ];

    protected $notificationTemplate = [
        'mailTemplate'      => 'sMxcWorkflowNotification',
        'mailSubject'       => 'Zahlungserinnerung zu Bestellung {$orderNumber} an Kunden versandt',
        'mailTitle'         => 'Zahlungserinnerung versandt',
        'mailBody'          => 'zur Vorkasse-Bestellung mit der Nummer <strong>{$orderNumber}</strong> wurde eine '
                                . 'Zahlungserinnerung an den Kunden geschickt, da nach drei Tagen noch kein Zahlungseingang erfolgt ist.',
        'message'           => 'Zahlungserinnerung zur Vorkasse-Bestellung versandt',
    ];

    public function run(EventInterface $e)
    {
        $order = $e->getParam('order');
        if ($order['cleared'] != Status::PAYMENT_STATE_OPEN) return;

        /** @var WorkflowEngine $engine */
        $engine = $e->getTarget();

        if (! $engine->isPrepayment($order)) return;
        if ($engine->getOrderAge($order)->days > 3) {
            $statusId = Status::PAYMENT_STATE_1ST_REMINDER;
            $orderId = $order['orderID'];
            $engine->setPaymentStatus($orderId, $statusId);
            $engine->sendStatusMail($orderId, $statusId);
            $context = $this->getNotificationContext($this->notificationTemplate, $order);
            $engine->sendNotificationMail($orderId, $context);
        }
    }
}