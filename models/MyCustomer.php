<?php
/**
 * User: TheCodeholic
 * Date: 11/26/2019
 * Time: 8:38 AM
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Customer
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\models
 */
class MyCustomer extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%customer}}';
    }

    public function rules()
    {
        return [
            [['username', 'email'], 'required']
        ];
    }
}
