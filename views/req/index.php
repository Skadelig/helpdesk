<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\models\Priority;
use app\models\Defects;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-index">

    <div class="row">
        
        <div class="col-lg-10" style="vertical-align:baseline;">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <p>
                <?= Html::button('Создать заявку', ['data-url'=>Url::to(['req/create']), 'class' => 'btn btn btn-primary', "data-toggle"=>"modal", "data-target"=>"#create-modal"]) ?>
            </p>
        </div>
    </div>
    <div class="row" style="padding-bottom:15px; padding-top: 20px;">
        <div class="col-lg-10">
            <?= Html::a('Все заявки', ['index'], ['class' => 'btn btn btn-success']) ?>
            <?= Html::a('Невыполненные заявки', ['notdone'], ['class' => 'btn btn btn-default']) ?>
        </div>
    </div>
    <div class="box">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'summary' => '',
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'employer.Employer_surname',
                'Executionstatus:boolean',
                'Request_text:ntext',
                /*
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
                // 'Request_FacticalDateEnding',
                // 'Request_DataEnding',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
<?php
Modal::begin([
    'header' => '<h2>Создать заявку</h2>',
    'id' => "create-modal"
]);

echo '<div class="modal-form"></div>';


Modal::end();
$jsscript = <<<JS

$(function(){
    
    $('#create-modal').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        modal.find(".modal-form").load(button.data('url'));
    })
});
JS;
$this->registerJs($jsscript);
?>
