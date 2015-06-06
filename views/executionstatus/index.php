<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExecutionstatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Executionstatuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="executionstatus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Executionstatus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Executionstatus_ID',
            'Executionstatus_nm:ntext',
            'Executionstatus_activ',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
