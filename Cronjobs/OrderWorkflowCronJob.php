<?php

namespace MxcVapee\Cronjobs;

use Enlight\Event\SubscriberInterface;
use MxcVapee\MxcVapee;
use MxcVapee\Workflow\WorkflowEngine;
use Throwable;

class OrderWorkflowCronJob implements SubscriberInterface
{
    protected $log = null;

    public static function getSubscribedEvents()
    {
        return [
            'Shopware_CronJob_MxcVapeeOrderWorkflow' => 'run',
        ];
    }

    public function run($job)
    {
        $services = MxcVapee::getServices();
        $log = $services->get('logger');

        try {
            $job = $services->get(WorkflowEngine::class);
            $log->info('OrderWorkflow cronjob triggered.');
            $job->run();
            $result = 'OrderWorkflow cronjob successfully completed.';
        } catch (Throwable $e) {
            if ($log) $log->except($e, false, false);
            $result = 'Exception occured.';
        }
        // displayed in Backend/Settings/Cronjobs
        return $result;
    }
}