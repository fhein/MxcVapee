<?php

namespace MxcVapee\PluginListeners;

use MxcCommons\Interop\Container\ContainerInterface;
use MxcCommons\Plugin\Mail\MailManager;
use MxcCommons\ServiceManager\Factory\FactoryInterface;

class StatusMailTemplateInstallerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $mailManager = $container->get(MailManager::class);
        return new StatusMailTemplateInstaller($mailManager);
    }
}