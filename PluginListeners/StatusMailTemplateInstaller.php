<?php


namespace MxcVapee\PluginListeners;

use MxcCommons\Plugin\Mail\MailTemplateManager;
use MxcCommons\Plugin\Service\ClassConfigAwareTrait;
use MxcCommons\Plugin\Service\LoggerAwareTrait;
use MxcCommons\ServiceManager\AugmentedObject;
use MxcCommons\Toolbox\Config\Config;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;

class StatusMailTemplateInstaller implements AugmentedObject
{
    use LoggerAwareTrait;
    use ClassConfigAwareTrait;

    protected $mailManager;

    protected $originalTemplates = __DIR__ . '/../Config/SavedStatusMailTemplates.config.php';

    public function __construct(MailTemplateManager $mailManager)
    {
        $this->mailManager = $mailManager;
    }

    public function install(InstallContext $context)
    {
        // save the current status mail templates
        $this->log->debug('Mail Templates');
        $this->log->debug(var_export($this->classConfig, true));
        $origStatusMailTemplates = $this->mailManager->getStatusMailTemplates();
        Config::toFile($this->originalTemplates, $origStatusMailTemplates);

        // install our status mail templates
        $this->mailManager->setMailTemplates($this->classConfig);

    }

    public function uninstall(UninstallContext $context)
    {
        $templates = Config::fromFile($this->originalTemplates);
        $this->mailManager->setMailTemplates($templates);
    }
}