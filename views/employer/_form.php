<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Job_ID')->textInput() ?>

    <?= $form->field($model, 'Users_id')->textInput() ?>

    <?= $form->field($model, 'Department_ID')->textInput() ?>

    <?= $form->field($model, 'Employer_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Employer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Employer_birthday')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
