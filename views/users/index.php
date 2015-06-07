<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Access;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Users_id',
            [
                'attribute'=>'Access_ID',
                'value'=>'access.Access_nm'
            ],
            
            'Users_login',
          //  'Users_pass',
          //  'Users_access',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
