<?php

namespace MxcVapee\Config;

use MxcVapee\PluginListeners\StatusMailTemplateInstaller;

return [
    'plugin_listeners'   => [
        StatusMailTemplateInstaller::class,
    ],
];
