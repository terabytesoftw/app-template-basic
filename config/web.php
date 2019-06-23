<?php

/**
 * Web application configuration shared by all test types
 */

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
        'assetManager' => [
            'basePath' => $params['app.basic.assetmanager.base.path'],
        ],
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
        'mailer' => [
            'useFileTransport' => $params['app.basic.mailer.usefiletransport'],
        ],
        'request' => [
            'cookieValidationKey' => $params['app.basic.request.cookievalidationkey'],
            'enableCsrfValidation' => $params['app.basic.request.enablecsrfvalidation'],
        ],
        'urlManager' => [
            'enablePrettyUrl' => $params['app.basic.urlmanager.enableprettyurl'],
            'showScriptName' => $params['app.basic.urlmanager.showscriptname'],
        ],
    ],
    'params' => $params,
];

return $config;
