<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->title = 'Обновить отдел: ' . ' ' . $model->Department_name;
$this->params['breadcrumbs'][] = ['label' => 'Отделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Department_name, 'url' => ['view', 'id' => $model->Department_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="department-update">

  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
