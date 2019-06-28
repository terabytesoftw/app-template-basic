<?php

/**
 * Yii web bootstrap file
 */

$autoload = dirname(getcwd(), 1) . '/vendor/autoload.php';
$yii2 = dirname(getcwd(), 1) . '/vendor/yiisoft/yii2/Yii.php';

if (!is_file($autoload)) {
    die('You need to set up the project dependencies using Composer');
}

if (!is_file($yii2)) {
    die('You need to set up yii2 using composer');
}

require_once $autoload;
require_once \hiqdev\composer\config\Builder::path('defines');
require_once $yii2;

Yii::setAlias('@root', dirname(getcwd(), 1));
Yii::setAlias('@vendor', dirname(getcwd(), 1) . '/vendor');

(function () {
    $config = require_once \hiqdev\composer\config\Builder::path('web');
    (new \yii\web\Application($config))->run();
})();
