<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();

Yii::setAlias('@home', '/home/thecodeholic/public_html');
Yii::setAlias('@domain', '@home/http://yii2-basic.test');
//Yii::setAlias('@test', '/something/test');
//Yii::setAlias('@test/test2', '/something/test/test2');
//Yii::setAlias('@test/test2.php', '/something/test/test2.php');
//
//Yii::getAlias('@home/something'); // /home/thecodeholic/public_html/something
//Yii::getAlias('@test/test2');
