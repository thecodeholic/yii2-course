<?php
/**
 * User: TheCodeholic
 * Date: 10/30/2019
 * Time: 9:17 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';

    public $css = [
        'css/all.css'
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'webfonts/*'
        ]
    ];
}
