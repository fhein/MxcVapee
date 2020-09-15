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

class FrontendDetailSubscriber implements SubscriberInterface
{

    private $config;
    /** @var \Enlight_Components_Db_Adapter_Pdo_Mysql */
    private $db;
    /** @var DropshipManager */
    private $dropshipManager;

    private $log;

    public function __construct($pluginName, ConfigReader $configReader)
    {
        $this->config = $configReader->getByPluginName($pluginName);
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
            'Enlight_Controller_Action_PreDispatch_Frontend_Detail' => 'onEnlightControllerActionPreDispatchFrontendDetail'
        ];
    }

    public function onEnlightControllerActionPreDispatchFrontendDetail(Enlight_Event_EventArgs $arguments)
    {
        $this->log = MxcVapee::getServices()->get('logger');
        $modelManager = MxcVapee::getServices()->get('models');
        $this->log->debug('Frontend Detail Subscriber');
        /** @var $request Enlight_Controller_Request_RequestHttp */
        $request = $arguments->getRequest();

        // only check availability only if a variant isn't selected specifically
        $number = $request->getParam('number');
        // group is used to return a different variant from the configurator
        // therefore this function should not be executed if group is set
        $group = $request->getParam('group');
        // no need to execute this function for other actions than index
        $action = $request->getParam('action');
        if ($number || $group || $action != 'index') {
            return;
        }

        // get requested article id
        $articleId = $request->sArticle;

        // get db
        $this->db = Shopware()->Container()->get('db');

        // if MxcDropship is installed we have to use DropshipManager to get stock info
        if (class_exists(DropshipManager::class)) {
            $this->dropshipManager = MxcDropship::getServices()->get(DropshipManager::class);
        }

        // if the main detail is in stock we have nothing to do
        $mainDetailAvailable = $this->dropshipManager
            ? $this->isMainDetailAvailableDropship($articleId)
            : $this->isMainDetailAvailableLocal($articleId);

        if ($mainDetailAvailable) {
            return;
        }

        // get the sortable properties of the details which have stock
        $detailData = $this->dropshipManager
            ? $this->getDetailDataDropship($articleId)
            : $this->getDetailDataLocal($articleId);

        // return if there are no available variants
        if (empty($detailData)) {
            return;
        }

        // get selection criterion
        $criterion = $this->config['mxcbcSortBy'];

        foreach ($detailData as $detail) {
            $this->log->debug('Detail:');
            foreach ($detail as $k => $v) {
                $type = gettype($v);
                $this->log->debug("Key: $k, Value: $v, type: $type");
            }
        }

        // create a list with the ordernumber and selection criterion
        $valueList = array();
        foreach ($detailData as $detail) {
            $valueList[$detail['ordernumber']] = $detail[$criterion];
        }
        $this->log->debug('Value List:');
        $this->log->debug(var_export($valueList, true));

        // order variants
        $orderBy = $this->config['mxcbcOrderBy'];
        if ($orderBy == 'max'){
            arsort($valueList);
        }else{
            asort($valueList);
        }
        $this->log->debug('Value List2:');
        $this->log->debug(var_export($valueList, true));

        // get orderNumber
        $orderNumber = key($valueList);
        $this->log->debug('Rewriting request to ' . $orderNumber);

        /** @var Article $article */
        $article = $modelManager->getRepository(Article::class)->find($articleId);
        $detail = $modelManager->getRepository(Detail::class)->findBy(['number' => $orderNumber]);
        $article->setMainDetail($detail);
        $modelManager->flush();

        // set orderNumber as a parameter
        $request->setParam('number', $orderNumber);
    }

    protected function getDetailData(int $articleId)
    {
        return $this->dropshipManager
            ? $this->getDetailDataDropship($articleId)
            : $this->getDetailDataLocal($articleId);
    }

    public function isMainDetailAvailableDropship(int $articleId)
    {
        // get the main detail together with its attributes which contain dropship information
        $mainDetail = $this->db->fetchAll(
            'SELECT d.instock, aa.* FROM s_articles_details d 
             LEFT JOIN s_articles_attributes aa ON aa.articledetailsID = d.id
             WHERE d.articleID = ? AND d.kind = 1',
            [$articleId]
        )[0];

        // Main detail is available if one dropship adapter reports positive stock
        // or allows to use own stock and own stock is positive
        $stockData = $this->dropshipManager->getStockInfo($mainDetail, true);
        foreach ($stockData as $stockInfo) {
            if ($stockInfo['instock'] > 0 ||
                $stockInfo['mode'] != DropshipManager::MODE_DROPSHIP_ONLY && $mainDetail['instock'] > 0) {
                return true;
            }
        }
        return false;
    }

    protected function isMainDetailAvailableLocal(int $articleId)
    {
        // MxcDropship is not installed, so detail's instock is relevant
        $mainDetail = $this->db->fetchAll(
            'SELECT id FROM s_articles_details WHERE articleID = ? AND kind = 1 AND instock <= 0', // AND laststock = 1',
            [$articleId]
        );
        return ! empty($mainDetail);
    }

    public function getDetailDataDropship(int $articleId)
    {
        // get the sortable properties of details together with the attributes which contain dropship information
        $details = $this->db->fetchAll('
            SELECT 
                d.ordernumber, d.sales, d.instock, p.price, aa.* 
            FROM 
                s_articles a 
            JOIN s_articles_details d ON a.id = d.articleID 
            JOIN s_articles_prices p ON d.id = p.articledetailsID
            JOIN s_articles_attributes aa ON d.id = aa.articledetailsID
            WHERE 
                d.articleID = ? AND d.kind = 2
            ', [$articleId]
        );
        if (empty($details)) return $details;

        // dispose all details which are out of stock
        $detailData = [];
        foreach ($details as $detail) {
            // query the attached dropship adapters for stock
            $stockData = $this->dropshipManager->getStockInfo($detail, true);
            foreach ($stockData as $stockInfo) {
                // if dropship mode accepts local stock we are done if local stock > 0
                if ($stockInfo['mode'] != DropshipManager::MODE_DROPSHIP_ONLY && $details['instock'] > 0) {
                    $detailData[] = $detail;
                    break;
                }
                // $stockInfo['instock'] > 0 only if dropship channel is active, inactive channels report 0
                if ($stockInfo['instock'] > 0) {
                    $detail['instock'] = $stockInfo['instock'];
                    $detailData[] = $detail;
                    break;
                }
            }
        }
        return $detailData;
    }

    protected function getDetailDataLocal(int $articleId)
    {
        // dropship module is not installed so we can
        // get the sortable details of variants that are in stock with a single query
        return $this->db->fetchAll('
            SELECT 
                d.ordernumber, d.sales, d.instock, p.price 
            FROM 
                s_articles a 
            JOIN s_articles_details d ON a.id = d.articleID 
            JOIN s_articles_prices p ON d.id = p.articledetailsID
            WHERE 
                d.articleID = ? AND d.kind = 2 AND ( d.instock > 0 OR d.laststock = 0 )
            ', [$articleId]
        );
    }
}
