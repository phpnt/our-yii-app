<?php

namespace app\controllers;

class WidgetTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render(
            'index'
        );
    }
}
