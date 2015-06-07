<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

use app\models\Jobs;
use app\models\Department;
/* @var $this yii\web\View */
/* @var $model app\models\Employer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Job_ID')->dropDownList(
        ArrayHelper::map(Jobs::find()->all(),"Job_ID","Job_name")
    ) ?>

  <!--  <?= $form->field($model, 'Users_id')->textInput() ?>-->

    <?= $form->field($model, 'Department_ID')->dropDownList(
        ArrayHelper::map(Department::find()->all(),"Department_ID","Department_name")
    ) ?>

    <?= $form->field($model, 'Employer_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Employer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Employer_birthday')->widget(DatePicker::classname(), 
        [
            'options' => ['placeholder' => 'День рождения'],
            'pluginOptions' => 
                [
                    'autoclose'=>true,
                    'format'=>"yyyy.m.d"
                ]
        ])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
