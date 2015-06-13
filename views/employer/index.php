<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Jobs;
use app\models\Users;
use app\models\Department;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'Employer_ID',
'jobs.Job_name',/*
            [
                 'attribute'=>'Job_ID',
                'value'=>'jobs.Job_name'
            ],*/
            'users.Users_login',
            /*
             [
                 'attribute'=>'Users_id',
                'value'=>
            ],*/
            'department.Department_name',/*
              [
                 'attribute'=>'Department_ID',
                'value'=>'department.Department_name'
            ],*/
            
            'Employer_surname',
            // 'Employer_name',
            // 'Employer_birthday',

            [
               'class' => 'yii\grid\ActionColumn',
                'template'=>'{update} {view}'
            ],
            
        ],
    ]); ?>

</div>
