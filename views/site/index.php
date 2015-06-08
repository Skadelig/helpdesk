<?php
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Priority;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Заявки';
?>
<div class="site-index">
        <div class="row">
            <div class="col-lg-12">
           <?php if(Yii::$app->user->isGuest){
                 
            }else{
                ?>
                <?= Html::a('Заявки', ['req/index'],['class'=>'btn btn-success']) ?>
                 <?= Html::a('Комментарии', ['comments/index'],['class'=>'btn btn-info']) ?>
                 <?= Html::a('Сотрудники', ['employer/index'],['class'=>'btn btn-warning']) ?>
                
                <?php
            }?>
           

            </div>
        </div>
   

    <div class="body-content">
 
        <div class="row">
            <div class="col-lg-12">
                <?php 
                    if(Yii::$app->user->isGuest){
                      echo  Html::a('Войдите в систему', ['site/login'],['class'=>'btn btn-success']) ;
                    }else{
                } 
                ?>
            </div>
            
        </div>

    </div>
</div>
