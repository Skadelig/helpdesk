<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Access */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="access-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Access_nm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Access_ctrl')->checkbox() ?>

    <?= $form->field($model, 'Access_redirect')->checkbox() ?>

    <?= $form->field($model, 'Access_deprt')->checkbox() ?>

    <?= $form->field($model, 'Access_prvt')->checkbox() ?>

    <?= $form->field($model, 'Access_otherusr')->checkbox() ?>

    <?= $form->field($model, 'Access_othrdeprt')->checkbox() ?>

    <?= $form->field($model, 'Access_statis')->checkbox() ?>

    <?= $form->field($model, 'Access_comnt')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
