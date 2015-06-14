<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Employer;
use app\models\Priority;
use app\models\Users;
use app\models\Defects;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Requests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requests-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Request_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Executionstatus')->checkbox() ?>

    <?= $form->field($model, 'Employer_ID')->dropDownList(
        ArrayHelper::map(Employer::find()->all(),"Employer_ID","Employer_surname")
    ) ?>

    <?= $form->field($model, 'Priority_ID')->dropDownList(['1'=>"Низкий", '2'=>'Средний','3'=>'Высокий']); ?>

    <?= $form->field($model, 'Users_id')->dropDownList(
        ArrayHelper::map(Users::find()->all(),"Users_id","Users_login")
    )  ?>

    <?= $form->field($model, 'Defects_ID')->dropDownList(
        ArrayHelper::map(Defects::find()->all(),"Defects_ID","Defects_nm")
    ) ?>

 

    <?= $form->field($model, 'Request_FacticalDateEnding')->widget(DateTimePicker::classname(), 
        [
            'options' => ['placeholder' => 'Фактическое заверешние'],
            'pluginOptions' => 
                [
                    'language' => 'ru',
                    'autoclose'=>true,
                     'value' => '8-Jun-2015 01:00',
                    'format'=>"dd-mm-yyyy HH:ii:ss",
                ]
        ])?>
   
    <?= $form->field($model, 'Request_DataEnding')->widget(DateTimePicker::classname(), 
        [
            'options' => ['placeholder' => 'Дата предполагаемого завершения'],
            'pluginOptions' => 
                [
                    'language' => 'ru',
                    'autoclose'=>true,
                    'value' => '8-Jun-2015 01:00',
                    'format'=>"dd-mm-yyyy HH:ii:ss",
                ]
        ])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
