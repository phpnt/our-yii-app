<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 22.07.2015
 * Time: 7:09
 */

namespace app\components;

use yii\base\Behavior;
use yii\web\Controller;

class MyBehaviors extends Behavior {

    private $_controller;
    private $_action;
    private $_removeUnderscore;

    public function setController($value)
    {
        $this->_controller = $value;
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function setAction($value)
    {
        $this->_action = $value;
    }

    public function getAction()
    {
        return $this->_action;
    }

    public function setRemoveUnderscore($value)
    {
        $this->_removeUnderscore = str_replace('_', ' ', $value);
    }

    public function getRemoveUnderscore()
    {
        return $this->_removeUnderscore;
    }

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'beforeAction'
        ];
    }

    public function beforeAction()
    {
        if($this->controller == 'main' && $this->action == 'search'):
            \Yii::$app->session->set('search', $this->removeUnderscore);
        endif;
    }
}