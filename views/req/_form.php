<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Requests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requests-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Request_date')->textInput() ?>

    <?= $form->field($model, 'Request_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Executionstatus')->checkbox() ?>

    <?= $form->field($model, 'Employer_ID')->textInput() ?>

    <?= $form->field($model, 'Priority_ID')->textInput() ?>

    <?= $form->field($model, 'Users_id')->textInput() ?>

    <?= $form->field($model, 'Defects_ID')->textInput() ?>

    <?= $form->field($model, 'Request_FacticalDateEnding')->textInput() ?>

    <?= $form->field($model, 'Request_DataEnding')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
