<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RequestsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requests-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Request_ID') ?>

    <?= $form->field($model, 'Request_text') ?>

    <?= $form->field($model, 'Executionstatus')->checkbox() ?>

    <?= $form->field($model, 'Employer_ID') ?>

    <?= $form->field($model, 'Priority_ID') ?>

    <?php // echo $form->field($model, 'Users_id') ?>

    <?php // echo $form->field($model, 'Defects_ID') ?>

    <?php // echo $form->field($model, 'Request_date') ?>

    <?php // echo $form->field($model, 'Request_FacticalDateEnding') ?>

    <?php // echo $form->field($model, 'Request_DataEnding') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
