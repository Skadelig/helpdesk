<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Requests;
use app\models\Users;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать комментарий', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Comment_ID',
            [
                'attribute'=>'Request_ID',
                'value'=>'request.Request_text'
            ],
            [
                'attribute'=>'Users_id',
                'value'=>'users.Users_login'
            ],
            'Comment_date',
            'Comment_txt:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
