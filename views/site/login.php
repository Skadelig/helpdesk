<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Users;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Логин';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
  <div class="content-wrapper">
    <p>Пожалуйста, введите логин и пароль:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'Users_login') ?>

    <?= $form->field($model, 'Users_pass')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ])->checkbox() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
    <div class="col-lg-offset-1" style="color:#999;">
       <!-- You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the Users_login/Users_pass, please check out the code <code>app\models\User::$users</code>.-->
    </div>
</div>
