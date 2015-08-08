<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.08.2015
 * Time: 15:38
 *
 * @var $user \app\models\User
 */
use yii\helpers\Html;

echo 'Привет '.Html::encode($user->username).'. ';
echo Html::a('Для смены пароля перейдите по этой ссылке.',
    Yii::$app->urlManager->createAbsoluteUrl(
        [
            '/main/reset-password',
            'key' => $user->secret_key
        ]
    ));