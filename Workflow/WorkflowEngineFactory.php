<?php

namespace MxcVapee\Workflow;

use MxcCommons\Interop\Container\ContainerInterface;
use MxcCommons\MxcCommons;
use MxcCommons\ServiceManager\Factory\FactoryInterface;
use MxcCommons\Toolbox\Shopware\MailTool;
use MxcDropship\Jobs\SendOrders;
use MxcDropship\MxcDropship;

class WorkflowEngineFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $sendOrders = null;
        if (class_exists(MxcDropship::class)) {
            $sendOrders = MxcDropship::getServices()->get(SendOrders::class);
        }
        $mailer = MxcCommons::getServices()->get(MailTool::class);
        return new WorkflowEngine($mailer, $sendOrders);
    }
}