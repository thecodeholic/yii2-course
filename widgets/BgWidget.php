<?php
/**
 * User: TheCodeholic
 * Date: 10/21/2019
 * Time: 9:20 AM
 */

namespace app\widgets;


use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class BgWidget
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\widgets
 */
class BgWidget extends Widget
{
    public $bgColor = 'white';

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        parent::run();
        $output = ob_get_clean();

        return $this->render('test', [
            'message' => 'Hello from widget view file'
        ]);
//        return Html::tag('div', $output, [
//            'style' => 'background-color: '.$this->bgColor
//        ]);
    }
}
