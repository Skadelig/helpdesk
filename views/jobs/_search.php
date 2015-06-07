<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Job_ID') ?>

    <?= $form->field($model, 'Job_name') ?>

    <?= $form->field($model, 'Job_responsibility') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
