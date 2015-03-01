<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hello = 'Привет МИР!!!';

        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    }

}
