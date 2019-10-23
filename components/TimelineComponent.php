<?php
/**
 * User: TheCodeholic
 * Date: 10/23/2019
 * Time: 9:06 AM
 */

namespace app\components;


use yii\base\Component;

/**
 * Class TimelineComponent
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\components
 */
class TimelineComponent extends Component
{
    public $numberOfEvent = 10;
    public $visibility = 'internal';
}
