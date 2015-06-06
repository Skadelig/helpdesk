<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Access */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="access-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Access_ID')->textInput() ?>

    <?= $form->field($model, 'Access_nm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Access_ctrl')->textInput() ?>

    <?= $form->field($model, 'Access_redirect')->textInput() ?>

    <?= $form->field($model, 'Access_deprt')->textInput() ?>

    <?= $form->field($model, 'Access_prvt')->textInput() ?>

    <?= $form->field($model, 'Access_otherusr')->textInput() ?>

    <?= $form->field($model, 'Access_othrdeprt')->textInput() ?>

    <?= $form->field($model, 'Access_statis')->textInput() ?>

    <?= $form->field($model, 'Access_comnt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
