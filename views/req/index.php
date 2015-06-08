<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Priority;
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
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn btn-primary']) ?>
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
            [
                'attribute'=>  'Priority_ID',
                'value'=> 'priority.Priority_nm'
            ],
          
            // 'Users_id',
            // 'Defects_ID',
            // 'Request_date',
            // 'Request_FacticalDateEnding',
            // 'Request_DataEnding',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
