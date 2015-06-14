<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jobs */

$this->title = 'Обновить должности: ' . ' ' . $model->Job_name;
$this->params['breadcrumbs'][] = ['label' => 'Должноси', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Job_name, 'url' => ['view', 'id' => $model->Job_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="jobs-update">

  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
