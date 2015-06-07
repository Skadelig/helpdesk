<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Access;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Access_ID')->dropDownList(
        ArrayHelper::map(Access::find()->all(),"Access_ID","Access_nm")
    ) ?>

    <?= $form->field($model, 'Users_login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Users_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Users_access')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
