<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 28.02.2015
 * Time: 1:48
 */
/* @var $content string */
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Yii::$app->name ?></title>
</head>
<body>
<p>Верхняя часть сайта</p>

<?= $content ?>

<p>Нижняя часть сайта</p>
</body>
</html>