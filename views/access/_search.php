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

    <?= $form->field($model, 'Access_ctrl')->checkbox() ?>

    <?= $form->field($model, 'Access_redirect')->checkbox() ?>

    <?= $form->field($model, 'Access_deprt')->checkbox() ?>

    <?php // echo $form->field($model, 'Access_prvt')->checkbox() ?>

    <?php // echo $form->field($model, 'Access_otherusr')->checkbox() ?>

    <?php // echo $form->field($model, 'Access_othrdeprt')->checkbox() ?>

    <?php // echo $form->field($model, 'Access_statis')->checkbox() ?>

    <?php // echo $form->field($model, 'Access_comnt')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
