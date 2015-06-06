<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExecutionstatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="executionstatus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Executionstatus_ID') ?>

    <?= $form->field($model, 'Executionstatus_nm') ?>

    <?= $form->field($model, 'Executionstatus_activ') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
