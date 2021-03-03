<?php

namespace MxcVapee\WorkflowActions;

use MxcCommons\EventManager\EventInterface;
use MxcWorkflow\Workflow\WorkflowAction;
use MxcWorkflow\Workflow\WorkflowEngine;
use Shopware\Models\Order\Status;

class CheckPaypalPayments extends WorkflowAction
{
    protected $config = [
        'statusId' => Status::ORDER_STATE_OPEN,
        'listener'    => __CLASS__,
        'priority'    => 100,
    ];

    protected $notificationTemplate = [
        'mailTemplate'      => 'sMxcWorkflowNotification',
        'mailSubject'       => 'Paypal-Zahlung zu Bestellung {$orderNumber} braucht Überprüfung',
        'mailTitle'         => 'Paypal-Zahlung ohne Zahlungseingang',
        'mailBody'          => 'zur Paypal-Bestellung <strong>{$orderNumber}</strong> konnte der Zahlungseingang '
                                .'auch nach fünf Minuten noch nicht festgestellt werden. Bitte überprüfen den Zahlungseingang '
                                .'bei Paypal direkt und markieren Sie ggfs. den Zahlungseingang manuell.',
        'message'           => 'Paypal-Zahlung ohne Zahlungseingang',
    ];

    public function run(EventInterface $e)
    {
        /** @var WorkflowEngine $engine */
        $engine = $e->getTarget();
        $orderId = $e->getParam('orderID');
        $order = $engine->getOrder($orderId);

        // if there is no order number the order was cancelled by the customer
        if ($order['ordernumber'] == 0) return;

        $paymentStatus = $order['cleared'];
        if ($paymentStatus == Status::PAYMENT_STATE_COMPLETELY_PAID) return;
        if (! $engine->isPaypal($order)) return;

        // skip if already processed
        $reviewStatus = Status::PAYMENT_STATE_REVIEW_NECESSARY;
        if ($paymentStatus == $reviewStatus) return;

        // Order must be at least 5 minutes old
        if ($engine->getOrderAge($order)->i < 5) return;

        $orderId = $order['orderID'];
        $engine->setPaymentStatus($orderId, $reviewStatus);
        $context = $this->getNotificationContext($this->notificationTemplate, $order);
        $engine->sendNotificationMail($orderId, $context);
    }
}