<?php

/**
 * Console application configuration shared by all test types
 */

require_once __DIR__ . '/bootstrap.php';

$appbasic = require __DIR__ . '/appbasic.php';
$params = require __DIR__ . '/params.php';

$params = array_merge($appbasic, $params ?? []);

$config = [
    'id' => $params['app.basic.id'],
    'aliases' => [
        '@bower' => $params['app.basic.alias.path.bower'],
        '@npm'   => $params['app.basic.alias.path.npm'],
        '@public' => $params['app.basic.alias.path.public'],
        '@runtime' => $params['app.basic.alias.path.runtime'],
    ],
    'basePath' => $params['app.basic.base.path'],
    'bootstrap' => $params['app.basic.bootstrap'],
    'controllerNamespace' => $params['app.basic.controller.namespace'],
    'language' => $params['app.basic.language'],
    'vendorPath' => $params['app.basic.vendor.path'],
    'components' => [
        'i18n' => [
            'translations' => [
                'AppBasic' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                ],
            ],
        ],
        'log' => [
            'traceLevel' => 'YII_DEBUG' ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => $params['app.basic.log.levels'],
                    'logFile' => $params['app.basic.log.logFile'],
                ],
            ],
        ],
    ],
    'params' => $params,
];

return $config;
