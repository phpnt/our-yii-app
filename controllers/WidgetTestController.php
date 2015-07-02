<?php

namespace app\controllers;

class WidgetTestController extends BehaviorsController
{
    public function actionIndex()
    {
        return $this->render(
            'index'
        );
    }
}
