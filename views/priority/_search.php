<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrioritySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priority-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Priority_ID') ?>

    <?= $form->field($model, 'Priority_nm') ?>

    <?= $form->field($model, 'Priority_about') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
