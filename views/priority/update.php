<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Priority */

$this->title = 'Обновить список приоритетов: ' . ' ' . $model->Priority_nm;
$this->params['breadcrumbs'][] = ['label' => 'Приоритет заявок', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Priority_nm, 'url' => ['view', 'id' => $model->Priority_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="priority-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
