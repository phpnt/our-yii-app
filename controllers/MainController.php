<?php
namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\LoginForm;
use app\models\User;

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

        if ($model->load(Yii::$app->request->post()) && $model->validate()):
            if ($user = $model->reg()):
                if ($user->status === User::STATUS_ACTIVE):
                    if (Yii::$app->getUser()->login($user)):
                        return $this->goHome();
                    endif;
                endif;
            else:
                Yii::$app->session->setFlash('error', 'Возникла ошибка при регистрации.');
                Yii::error('Ошибка при регистрации');
                return $this->refresh();
            endif;
        endif;

        return $this->render(
            'reg',
            [
                'model' => $model
            ]
        );
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['/main/index']);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest):
            return $this->goHome();
        endif;

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()):
            return $this->goBack();
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
