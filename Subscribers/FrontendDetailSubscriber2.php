<?php
namespace MxcVapee\Subscribers;

use Enlight\Event\SubscriberInterface;
use MxcCommons\Plugin\Service\DatabaseAwareTrait;
use MxcDropship\Dropship\DropshipManager;
use MxcDropship\MxcDropship;
use MxcVapee\MxcVapee;
use Shopware\Components\Plugin\ConfigReader;
use Enlight_Event_EventArgs;
use Enlight_Controller_Request_RequestHttp;
use Shopware\Models\Article\Article;
use Shopware\Models\Article\Detail;

class FrontendDetailSubscriber2 implements SubscriberInterface
{

    private $config;
    /** @var \Enlight_Components_Db_Adapter_Pdo_Mysql */
    private $db;
    /** @var DropshipManager */
    private $dropshipManager;

    private $modelManager;

    private $log;


    public function __construct($pluginName, ConfigReader $configReader)
    {
        $this->config = $configReader->getByPluginName($pluginName);
        $services = MxcVapee::getServices();
        $this->log = $services->get('logger');
        $this->modelManager = $services->get('models');
        $this->db = $services->get('db');
    }

    public function setDb($db) {
        $this->db = $db;
    }

    public function setDSM($dsm) {
        $this->dropshipManager = $dsm;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PreDispatch_Frontend_Detail' => 'onEnlightControllerActionPreDispatchFrontendDetail',
            'Enlight_Controller_Action_PostDispatch_Frontend_Detail' => 'onEnlightControllerActionPostDispatchFrontendDetail',
        ];
    }

    public function onEnlightControllerActionPreDispatchFrontendDetail(Enlight_Event_EventArgs $args)
    {
        $details = $this->getDetails($args);
        if (! $details) return;

        $this->dropshipManager = MxcDropship::getServices()->get(DropshipManager::class);

        /** @var Detail $detail */
        foreach ($details as $detail) {
            $attr = $detail->getAttribute();
            $attr->setMxcbcDsiOwnstock($detail->getInStock());
            $detail->setInStock($this->getDetailStock($detail));
        }
        $this->modelManager->flush();
    }

    public function onEnlightControllerActionPostDispatchFrontendDetail(Enlight_Event_EventArgs $args)
    {
        $details = $this->getDetails($args);
        if (! $details) return;
        /** @var Detail $detail */
        foreach ($details as $detail) {
            $attr = $detail->getAttribute();
            $detail->setInStock($attr->getMxcbcDsiOwnstock());
        }
        $this->modelManager->flush();
    }

    public function getDetailStock(Detail $detail)
    {
        $detail = $this->db->fetchAll('
            SELECT d.instock, d.minpurchase, d.laststock, aa.* FROM s_articles_details d 
            LEFT JOIN s_articles_attributes aa ON aa.articledetailsID = d.id
            WHERE d.id = ?
        ', [$detail->getId()]);
        if (empty($detail)) return 0;
        $detail = $detail[0];
        // query the attached dropship adapters for stock
        $stockData = $this->dropshipManager->getStockInfo($detail, true);
        foreach ($stockData as $stockInfo) {
            $mode = $stockInfo['mode'];
            $lastStock = $detail['lastStock'];
            $instock = $detail['instock'];
            $minPurchase = $detail['min_purchase'];

            // if delivery mode is set to ownstock we return the detail's instock
            if ($mode == DropshipManager::MODE_OWNSTOCK_ONLY) return $instock;

            // if dropship mode accepts local stock we are done if local stock is big enough
            if ($stockInfo['mode'] != DropshipManager::MODE_DROPSHIP_ONLY
                && $lastStock * $instock >= $lastStock * $minPurchase) {

                return $instock;
            }
            $instock = $stockInfo['instock'];
            // $stockInfo['instock'] > 0 only if dropship channel is active, inactive channels report 0
            if ($lastStock * $instock >= $lastStock * $minPurchase) {
                return $instock;
            }
        }
        return 0;
    }

    private function getDetails(Enlight_Event_EventArgs $args)
    {
        $this->log->debug('Frontend Detail Subscriber');
        /** @var $request Enlight_Controller_Request_RequestHttp */
        $request = $args->getRequest();

        // only check availability only if a variant isn't selected specifically
        $number = $request->getParam('number');
        // group is used to return a different variant from the configurator
        // therefore this function should not be executed if group is set
        $group = $request->getParam('group');
        // no need to execute this function for other actions than index
        $action = $request->getParam('action');
        if ($number || $group || $action != 'index') {
            return null;
        }

        // get requested article id
        $articleId = $request->sArticle;

        $article = $this->modelManager->getRepository(Article::class)->find($articleId);
        $details = $article->getDetails();
        if ($details->count() < 2) return null;

        return $details;

    }
}
