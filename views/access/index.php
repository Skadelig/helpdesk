<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Access', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Access_ID',
            'Access_nm:ntext',
            'Access_ctrl',
            'Access_redirect',
            'Access_deprt',
            // 'Access_prvt',
            // 'Access_otherusr',
            // 'Access_othrdeprt',
            // 'Access_statis',
            // 'Access_comnt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
