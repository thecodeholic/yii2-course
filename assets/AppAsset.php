<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
//    public $sourcePath = '';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/simple-line-icons/css/simple-line-icons.css',
        'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        'css/landing-page.min.css'
    ];
    public $js = [
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        FontAwesomeAsset::class
    ];

    public function init()
    {
        parent::init();
        $this->js[] = 'i18n/' . \Yii::$app->language . '.js';
    }
}
