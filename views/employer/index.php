<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Employer_ID',
            'Job_ID',
            'Users_id',
            'Department_ID',
            'Employer_surname',
            // 'Employer_name',
            // 'Employer_birthday',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
