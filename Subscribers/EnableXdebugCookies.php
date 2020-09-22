<?php

namespace MxcVapee\Subscribers;

use Enlight\Event\SubscriberInterface;
use Shopware\Bundle\CookieBundle\CookieCollection;
use Shopware\Bundle\CookieBundle\Structs\CookieGroupStruct;
use Shopware\Bundle\CookieBundle\Structs\CookieStruct;

class EnableXdebugCookies implements SubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'CookieCollector_Collect_Cookies' => 'addXdebugCookies'
        ];
    }

    public function addXdebugCookies(): CookieCollection
    {
        $collection = new CookieCollection();
        $collection->add(new CookieStruct(
            'XDEBUG_COOKIES',
            '~^(XDEBUG_SESSION|XDEBUG_PROFILE|XDEBUG_TRACE)$~',
            'XDebug Session Cookies',
            CookieGroupStruct::TECHNICAL
        ));
        return $collection;
    }
}