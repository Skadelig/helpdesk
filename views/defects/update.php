<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Defects */

$this->title = 'Редактировать Дефект №: ' . ' ' . $model->Defects_ID;
$this->params['breadcrumbs'][] = ['label' => 'Дефекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Defects_ID, 'url' => ['view', 'id' => $model->Defects_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="defects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
