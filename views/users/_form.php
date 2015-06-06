<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Employer_ID')->textInput() ?>

    <?= $form->field($model, 'Access_ID')->textInput() ?>

    <?= $form->field($model, 'Users_login')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Users_pass')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Users_access')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
