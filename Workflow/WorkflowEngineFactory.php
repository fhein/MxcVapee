<?php

namespace MxcVapee\Workflow;

use MxcCommons\Interop\Container\ContainerInterface;
use MxcCommons\MxcCommons;
use MxcCommons\ServiceManager\Factory\FactoryInterface;
use MxcCommons\Toolbox\Shopware\MailTool;
use MxcDropship\Dropship\DropshipManager;
use MxcDropship\Jobs\SendOrders;
use MxcDropship\MxcDropship;

class WorkflowEngineFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $sendOrders = null;
        $dropshipManager = null;
        if (class_exists(MxcDropship::class)) {
            $services = MxcDropship::getServices();
            $sendOrders = $services->get(SendOrders::class);
            $dropshipManager = $services->get(DropshipManager::class);
        }
        $mailer = MxcCommons::getServices()->get(MailTool::class);
        return new WorkflowEngine($mailer, $sendOrders, $dropshipManager);
    }
}