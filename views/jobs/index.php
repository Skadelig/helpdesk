<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Должности';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-index">

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать должность', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 <div class="box">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'Job_ID',
            'Job_name',
            'Job_responsibility',

            ['class' => 'yii\grid\ActionColumn',
              'template'=>'{update} {view}'],
        ],
    ]); ?>
</div>
</div>
