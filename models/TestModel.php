<?php
/**
 * User: TheCodeholic
 * Date: 10/15/2019
 * Time: 8:40 AM
 */

namespace app\models;


use yii\base\Model;

/**
 * Class TestModel
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\models
 */
class TestModel extends Model
{
    public $name;
    public $myAge;
    public $surname;
    public $email;


    public function attributeLabels()
    {
        return [
            'name' => 'Enter your name',
            'age' => 'Your age'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'surname'], 'required', 'message' => "Please enter your name"]
        ];
    }
}
