<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;
use app\models\Users;
use app\models\Requests;


/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>
<h3>Новый комментарий</h3>
<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

   
   <div style="display:none"> <?php echo $form->field($model, 'Request_ID')->hiddenInput(
        ['id'=>'request_id', 'label'=>'']
    ) ?>
    <?= $form->field($model, 'Users_id')->hiddenInput(
        ['value'=>Yii::$app->user->identity->Users_id]
    ) ?>
</div>

    <?= $form->field($model, 'Comment_txt')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
