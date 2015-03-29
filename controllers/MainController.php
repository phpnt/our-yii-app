<?php
namespace app\controllers;

use Yii;

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

    public function actionSearch($search = null)
    {
        return $this->render(
            'search',
            [
                'search' => $search
            ]
        );
    }
}
