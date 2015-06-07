<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requests', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'Employer_ID',
                'value'=>'employer.Employer_surname'
            ],
            'Request_text:ntext',
            'Executionstatus:boolean',
            
            'Priority_ID',
            // 'Users_id',
            // 'Defects_ID',
            // 'Request_date',
            // 'Request_FacticalDateEnding',
            // 'Request_DataEnding',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
