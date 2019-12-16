<?php
/**
 * User: TheCodeholic
 * Date: 12/2/2019
 * Time: 9:14 AM
 */

namespace app\controllers;


use app\models\Employee;
use app\models\Salary;
use yii\db\Query;
use yii\web\Controller;

/**
 * Class EmployeeController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class EmployeeController extends Controller
{
    public function actionIndex()
    {
        $this->processData1();
        return $this->renderContent("");
    }

    private function processData1()
    {
        $limit = 1000;
        $offset = 0;
        do {
            $employees = Employee::find()
                ->limit($limit)
                ->offset($offset)
                ->asArray()
                ->all();

            foreach ($employees as $employee) {
                // Do your job right here
            }

            $offset += $limit;
        } while ($employees);
    }

    private function processData2()
    {
        $limit = 1000;
        foreach (Employee::find()->asArray()->batch($limit) as $employees) {
            foreach ($employees as $employee) {
                // Do your job right here
            }
        }
    }

    private function processData3()
    {
        foreach (Employee::find()->each(1000) as $employee){
            // Do your job right here
        }
    }
}
