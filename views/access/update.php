<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Access */

$this->title = 'Изменить роль: ' . ' ' . $model->Access_nm;
$this->params['breadcrumbs'][] = ['label' => 'Роли', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Access_nm, 'url' => ['view', 'id' => $model->Access_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="access-update">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
