<?php
/**
 * User: TheCodeholic
 * Date: 11/26/2019
 * Time: 8:39 AM
 */

namespace app\controllers;


use app\models\MyCustomer;
use yii\web\Controller;

/**
 * Class CustomerController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class CustomerController extends Controller
{
    public function actionIndex()
    {
        $customers = MyCustomer::find()->all();
        echo '<pre>';
        var_dump($customers);
        echo '</pre>';
    }

    public function actionView($id)
    {
//        $customer = MyCustomer::find()
//            ->where("id = :id", [
//                'id' => $id
//            ])->one();
        $customer = MyCustomer::findOne($id);
        echo '<pre>';
        var_dump($customer->username);
        echo '</pre>';
    }

    public function actionSave()
    {
        $customer = new MyCustomer();
//        $customer->username = 'john';
        $customer->email = 'john@example.com';

        if ($customer->save()){
            echo '<pre>';
            var_dump("SUCCESS");
            echo '</pre>';
        } else {
            echo '<pre>';
            var_dump("FAIL ", $customer->errors);
            echo '</pre>';
        }
    }

    public function actionUpdate($id)
    {
        $customer = MyCustomer::findOne($id);
        $customer->email = 'something@example.com';

        if ($customer->save()){
            echo '<pre>';
            var_dump("SUCCESS");
            echo '</pre>';
        } else {
            echo '<pre>';
            var_dump("FAIL ", $customer->errors);
            echo '</pre>';
        }
    }

    public function actionDelete($id)
    {
        $customer = MyCustomer::findOne($id);
        if ($customer->delete()){
            echo '<pre>';
            var_dump("SUCCESS");
            echo '</pre>';
        } else{
            echo '<pre>';
            var_dump("FAIL ", $customer->errors);
            echo '</pre>';
        }
    }
}
