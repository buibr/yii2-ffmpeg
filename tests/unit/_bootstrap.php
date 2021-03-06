<?php

defined('YII_ENV') or define('YII_ENV', 'test');
defined('YII_DEBUG') or define('YII_DEBUG', true);

require_once __DIR__ .  '/../../../app/vendor/yiisoft/yii2/Yii.php';
require __DIR__ .'/../../../app/vendor/autoload.php';

$dir = dirname(__DIR__);

Yii::setAlias('@mtest', $dir  . '/unit');
Yii::setAlias('@ext', $dir );

$config = require_once __DIR__ .  '/../../../app/config/console.php';


(new yii\console\Application($config))->init();
