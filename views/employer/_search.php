<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Employer_ID') ?>

    <?= $form->field($model, 'Job_ID') ?>

    <?= $form->field($model, 'Users_id') ?>

    <?= $form->field($model, 'Department_ID') ?>

    <?= $form->field($model, 'Employer_surname') ?>

    <?php // echo $form->field($model, 'Employer_name') ?>

    <?php // echo $form->field($model, 'Employer_birthday') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
