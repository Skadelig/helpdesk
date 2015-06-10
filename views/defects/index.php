<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DefectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дефекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="defects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить дефект', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Defects_ID',
            'Defects_nm',
        ],
    ]); ?>

</div>
