<?php
namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\LoginForm;

class MainController extends \yii\web\Controller
{
    public $layout = 'basic';
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $hello = 'Привет МИР!!!';

        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    }

    public function actionReg()
    {
        $model = new RegForm();

        if (Yii::$app->request->post()):
            echo '<pre>';
            print_r(Yii::$app->request->post());
            echo '</pre>';
            Yii::$app->end();
        endif;

        return $this->render(
            'reg',
            [
                'model' => $model
            ]
        );
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if (Yii::$app->request->post()):
            echo '<pre>';
            print_r(Yii::$app->request->post());
            echo '</pre>';
            Yii::$app->end();
        endif;

        return $this->render(
            'login',
            [
                'model' => $model
            ]
        );
    }

    public function actionSearch($search = null)
    {
        if ($search):
            Yii::$app->session->setFlash(
                'success',
                'Результат поиска'
            );
        else:
            Yii::$app->session->setFlash(
                'error',
                'Не заполнена форма поиска'
            );
        endif;

        return $this->render(
            'search',
            [
                'search' => $search
            ]
        );
    }
}
