<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;
use app\models\Users;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Request_ID')->textInput() ?>

    <?= $form->field($model, 'Users_id')->dropDownList(
        ArrayHelper::map(Users::find()->all(),"Users_id",'Users_login')
    ) ?>


    <!--<?= $form->field($model, 'Comment_date')->textInput() ?> -->
    <?= $form->field($model, 'Comment_date')->widget(DateTimePicker::classname(), 
        [
            'options' => ['placeholder' => 'Дата заявки'],
            'pluginOptions' => 
                [
                    'autoclose'=>true,
                    'format'=>"yyyy.m.d HH:ii "
                ]
        ])?>

    <?= $form->field($model, 'Comment_txt')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
