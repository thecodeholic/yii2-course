<?php
/**
 * User: TheCodeholic
 * Date: 10/3/2019
 * Time: 9:07 AM
 */

namespace app\components;


use yii\base\Component;

/**
 * Class TestComponent
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\components
 */
class TestComponent extends Component
{
    public $var1 = 10;
    public function __construct($config = [])
    {
        echo '<pre>';
        var_dump("1111");
        echo '</pre>';
        parent::__construct($config);
    }

    public function hello()
    {
        echo '<pre>';
        var_dump("Hello from test");
        echo '</pre>';
    }
}
