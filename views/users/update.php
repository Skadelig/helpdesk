<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Обновить список пользователей: ' . ' ' . $model->Users_login;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Users_login, 'url' => ['view', 'id' => $model->Users_id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="users-update">

   <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
