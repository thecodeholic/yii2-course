<?php
/**
 * User: TheCodeholic
 * Date: 11/5/2019
 * Time: 7:25 AM
 */

namespace app\controllers;


use yii\db\Connection;
use yii\db\Expression;
use yii\web\Controller;

/**
 * Class UserController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class UserController extends Controller
{
    public function actionIndex()
    {
//        $db = new Connection([
//            'dsn' => 'mysql:host=localhost;dbname=yii2_course',
//            'username' => 'root',
//            'password' => '',
//            'charset' => 'utf8mb4',
////            'tablePrefix' => ''
//        ]);
        $db = \Yii::$app->db;
        // Use {{%table_name}} to correctly quote the table and to user table prefix also
        $users = $db->createCommand("SELECT * FROM {{%user}}")->queryAll();
        echo '<pre>';
        var_dump($users);
        echo '</pre>';
        return "List of users";
    }

    public function actionView($id = 2)
    {
        $db = \Yii::$app->db;
        $command = $db->createCommand("SELECT * FROM user WHERE id = :id");
        $user2 = $command->bindParam('id', $id);
        echo '<pre>';
        var_dump($user2);
        echo '</pre>';

        $id = 3;
        $user3 = $command->bindParam('id', $id)->queryOne();
        echo '<pre>';
        var_dump($user3);
        echo '</pre>';
    }

    public function actionCreate()
    {
        $db = \Yii::$app->db;
        $result = $db->createCommand()->batchInsert('user', ['username', 'status'], [
            [
                'username' => 'user1',
                'status' => 1
            ],
            [
                'username' => 'user2',
                'status' => 1
            ],
        ])->execute();
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
        return "User created";
    }

    public function actionUpdate()
    {
        $db = \Yii::$app->db;
//        $db->createCommand()->update('user', [
//            'email' => 'user1@example.com'
//        ], [
//            'id' => 5,
//        ])->execute();
        $db->createCommand()->update('user', [
            'email' => new Expression('CONCAT(username, \'@example.com\')')
        ], [
            'email' => null
        ])->execute();
        return "User updated";
    }

    public function actionDelete($id)
    {
        $db = \Yii::$app->db;
        $db->createCommand()->delete('user', 'id = :id', [
            'id' => $id
        ])->execute();
        return "User deleted";
    }

    public function actionUpsert()
    {
        $db = \Yii::$app->db;
        $db->createCommand()->upsert('user', [
            'username' => 'john',
            'email' => 'john.doe@example.com'
        ], [
            'email' => 'john.doe@example.com'
        ])->execute();
    }

    public function actionQuoting()
    {
        $db = \Yii::$app->db;
        // SELECT `username` from `user`
        // SELECT IFNULL(`email`, `username`) FROM `user`;

        $db->createCommand("SELECT IFNULL([[email]], [[username]]) FROM {{user}}")->execute();
    }
}
