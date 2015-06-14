<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Defects */

$this->title = 'Редактировать Дефект: ' . ' ' . $model->Defects_nm;
$this->params['breadcrumbs'][] = ['label' => 'Дефекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Defects_nm, 'url' => ['view', 'id' => $model->Defects_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="defects-update">

 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
