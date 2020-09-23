<?php

namespace MxcVapee\Config;

use MxcVapee\PluginListeners\StatusMailTemplateInstaller;
use Shopware\Bundle\AttributeBundle\Service\TypeMapping;

return [
    'plugin_listeners'   => [
        StatusMailTemplateInstaller::class,
    ],
    'doctrine' => [
        'attributes' => [
            's_articles_attributes'      => [
                'mxcbc_product_type' => ['type' => TypeMapping::TYPE_STRING],
                'mxcbc_product_meta' => ['type' => TypeMapping::TYPE_INTEGER],
                'mxcbc_flavor'       => ['type' => TypeMapping::TYPE_STRING],
            ],
        ],
    ],
];
