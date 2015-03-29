<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 12.03.2015
 * Time: 10:07
 */
namespace app\components;

use yii\base\Widget;

class SecondWidget extends Widget {

    public function init () {
        parent::init();
        ob_start();
    }

    public function run() {
        $content = ob_get_clean();
        return $this->render(
            'second',
            [
                'content' => $content
            ]
        );
    }
}