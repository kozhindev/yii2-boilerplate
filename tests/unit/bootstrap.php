<?php

define('YII_ENV', 'test');
define('STEROIDS_ROOT_DIR', dirname(dirname(__DIR__)));

$config = require(STEROIDS_ROOT_DIR . '/vendor/kozhindev/yii-steroids/backend/boot/bootstrap.php');
require STEROIDS_ROOT_DIR . '/app/core/base/Yii.php';

Yii::setAlias('@tests', __DIR__);
(new \steroids\base\WebApplication($config));
