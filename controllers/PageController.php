<?php
/**
 * User: TheCodeholic
 * Date: 10/10/2019
 * Time: 9:07 AM
 */

namespace app\controllers;


use yii\web\Controller;
use yii\web\ViewAction;

/**
 * Class PageController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class PageController extends Controller
{

    public function actions()
    {
        return [
            'page' => [
                'class' => ViewAction::class,
                'viewPrefix' => false
            ]
        ];
    }

    public function actionAbout($id = 41)
    {
        $this->view->params['sharedVariable'] = 'I am shared variable';
        return $this->render('about', [
            'id' => $id
        ]);
    }
}
