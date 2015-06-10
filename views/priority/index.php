<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrioritySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Приоритет заявок';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать приоритет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Priority_ID',
            'Priority_nm',
            'Priority_about:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
