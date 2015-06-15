<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Request; 
use app\models\Users; 

/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = (substr(($model->Comment_txt),0,50)).'...';
$this->params['breadcrumbs'][] = ['label' => 'Комментарии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-view">

    
    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Comment_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Comment_ID], [
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
            'Comment_ID',
            'request.Request_text',
            // 'Request_ID',
            'users.Users_login',
           // 'Users_id',
            [
                'attribute'=>'Comment_date',
                'format' => ['date', 'php:d.m.Y h:i:s']
            ],
            'Comment_txt:ntext',
        ],
    ]) ?>

</div>
