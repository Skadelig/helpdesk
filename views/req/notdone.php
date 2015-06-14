<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Priority;
use app\models\Defects;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-index">
<!--<div class="col-lg-12">
                <?= Html::a('Заявки', ['req/index']) ?>+
                <?= Html::a('Роли', ['access/index']) ?>
                <?= Html::a('Комментарии', ['comments/index']) ?>+
                <?= Html::a('Дефекты', ['defects/index']) ?>+
                <?= Html::a('Отделы', ['department/index']) ?>+
                <?= Html::a('Сотрудники', ['employer/index']) ?>+
                <?= Html::a('Должности', ['jobs/index']) ?>+
                <?= Html::a('Приоритет', ['priority/index']) ?>+
                <?= Html::a('Пользователи', ['users/index']) ?>+

            </div>-->
    <div class="row">
        
        <div class="col-lg-10" style="vertical-align:baseline;">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <p>
                <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn btn-primary']) ?>
            </p>
        </div>
    </div>
    <div class="row" style="padding-bottom:10px;">
        <div class="col-lg-12">
            <?= Html::a('Все заявки', ['index'], ['class' => 'btn  btn-default']) ?>
            <?= Html::a('Невыполненные заявки', ['notdone'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'employer.Employer_surname',
            // 'Executionstatus:boolean',
            'Request_text:ntext',/*
            [
                'attribute'=>'Employer_ID',
                'value'=>'employer.Employer_surname'
            ],*/
          
           
            [
                'attribute'=>  'Priority_ID',
                'value'=> 'priority.Priority_nm'
            ],
            [
                'attribute'=>'Defects_ID',
                'value'=>'defects.Defects_nm'
            ],
            // 'Users_id',
            // 'Defects_ID',
             // 'Request_date',
            [
                'attribute'=>'Request_FacticalDateEnding',
               'format' => ['date', 'php:d.m.Y h:i:s']
           ],
            
            // 'Request_DataEnding',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
