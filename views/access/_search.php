<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="access-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Access_ID') ?>

    <?= $form->field($model, 'Access_nm') ?>

    <?= $form->field($model, 'Access_ctrl') ?>

    <?= $form->field($model, 'Access_redirect') ?>

    <?= $form->field($model, 'Access_deprt') ?>

    <?php // echo $form->field($model, 'Access_prvt') ?>

    <?php // echo $form->field($model, 'Access_otherusr') ?>

    <?php // echo $form->field($model, 'Access_othrdeprt') ?>

    <?php // echo $form->field($model, 'Access_statis') ?>

    <?php // echo $form->field($model, 'Access_comnt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
