<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employer */

//$this->title = $model->'Фамилия';
$this->title = $model->username; ;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-view">

    <p>
        <?= Html::a('Назад', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
 <div class="stats-index row">
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $model->done ?></h3>
                <p>Выполнено </p>
            </div>
            <div class="icon"> <i class="fa fa-check-square-o"></i></div>
      
        </div>
    </div>
     <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $model->thismounth ?></h3>
                <p>Выполнено в этом месяце </p>
            </div>
            <div class="icon"> <i class="ion ion-stats-bars"></i></div>
      
        </div>
    </div> 
     <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $model->inwork ?></h3>
                <p>В работе </p>
            </div>
            <div class="icon"> <i class="fa fa-wrench"></i></div>
            
        </div>
    </div>
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>0</h3>
                <p>Просрочено </p>
            </div>
            <div class="icon"> <i class="fa fa-exclamation"></i></div>
           
        </div>
    </div>
</div>

   

</div>