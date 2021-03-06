<?php

namespace MxcVapee\Config;

use MxcVapee\WorkflowActions\CheckPaypalPayments;
use MxcVapee\WorkflowActions\PromoteKlarnaOrders;
use MxcVapee\WorkflowActions\PromotePaidOrders;
use MxcVapee\WorkflowActions\RemindPrepayments;
use Shopware\Bundle\AttributeBundle\Service\TypeMapping;

return [
    'plugin_listeners'   => [
        CheckPaypalPayments::class,
        PromotePaidOrders::class,
        PromoteKlarnaOrders::class,
        RemindPrepayments::class,
//        StatusMailTemplateInstaller::class,
    ],
    'doctrine' => [
        'attributes' => [
            's_articles_attributes'      => [
                'mxcbc_product_type'    => ['type' => TypeMapping::TYPE_STRING],
                'mxcbc_product_meta'    => ['type' => TypeMapping::TYPE_INTEGER],
                'mxcbc_flavor'          => ['type' => TypeMapping::TYPE_STRING],
                'mxcbc_flavor_filter'   => ['type' => TypeMapping::TYPE_STRING],
            ],
        ],
    ],
];
