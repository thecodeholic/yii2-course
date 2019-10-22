<?php
/**
 * User: TheCodeholic
 * Date: 10/21/2019
 * Time: 9:16 AM
 */

namespace app\widgets;


use yii\base\Widget;

/**
 * Class ButtonWidget
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\widgets
 */
class ButtonWidget extends Widget
{
    public $text;

    public function init()
    {
        parent::init();
        $this->text = ucfirst($this->text);
    }

    public function run()
    {
        parent::run();
        return '<button>'.$this->text.'</button>';
    }

}
