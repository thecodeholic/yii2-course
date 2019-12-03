<?php
/**
 * User: TheCodeholic
 * Date: 12/2/2019
 * Time: 9:40 AM
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Salary
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\models
 */
class Salary extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%salaries}}';
    }
}
