<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model app\models\Requests */

$this->title = (substr(($model->Request_text),0,30)).'...';
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Request_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Request_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить это?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Request_ID',
            'Request_text:ntext',
            'Executionstatus:boolean',
            'employer.Employer_surname',
            'priority.Priority_nm',
            'users.Users_login',
            'defects.Defects_nm',
            [
                'attribute'=>'Request_date',
                'format' => ['date', 'php:d.m.Y h:i:s']
            ],
            [
                'attribute'=>'Request_FacticalDateEnding',
                'format' => ['date', 'php:d.m.Y h:i:s']
            ],
            [
                'attribute'=>'Request_DataEnding',
                'format' => ['date', 'php:d.m.Y h:i:s']
            ],
        ],
    ]) ?>
<h2>Комментарии</h2>
<div class="comments">
</div>
<?php
$script = "var request_id = ". $model->Request_ID.';
';
$script.= <<< JS
$(document).ready(function() {
    $.get(
  "/index.php",
  {
    r: "comments/for",
    id: request_id
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
  $('.comments').html(data);
  alert(data)
}
});
JS;
$this->registerJs($script);
?>

</div>
