<?php
/**
 * User: TheCodeholic
 * Date: 12/2/2019
 * Time: 9:13 AM
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Employee
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\models
 */
class Employee extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%employees}}';
    }
}
