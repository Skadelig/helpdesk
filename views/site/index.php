<?php
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Priority;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
?>
<div class="site-index">
        <div class="row">
            <div class="col-lg-12">
           <?php if(Yii::$app->user->isGuest){?>
                 <div class="jumbotron" style="margin-top:60px; margin-bottom:280px;">
                  <h1>Начните пользоваться Helpdesk прямо сейчас!</h1>
                  <p>Зарегистрируйтесь или войдите под своим логином</p>
                     <p>
                        <?= HTML::a('Зарегистрироваться', ['site/signup'],['class'=>'btn btn-success btn-lg']) ?>
                     </p>
                      <p>
                        <?= HTML::a('Войти', ['site/login'],['class'=>'btn btn-success btn-lg']) ?>
                     </p>
                </div>
                <?php
            }else{
                ?>
                <div class="jumbotron" style="margin-top:60px; margin-bottom:280px;">
                  <h1>Здравствуй, пользователь!</h1>
                  <p>Посмотреть новые заявки или комментарии можно здесь</p>
                     <p>
                        <?= HTML::a('Заявки', ['req/index'],['class'=>'btn btn-primary btn-lg']) ?>
                     </p>
                     <p>
                     <?= HTML::a('Комментарии', ['comments/index'],['class'=>'btn btn-info btn-lg']) ?>
                      </p>
                </div>
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
           <!-- <div class="jumbotron" style="margin-top:60px; margin-bottom:280px;">
                <h1>Здарвствуй, пользователь!</h1>
                <p>Посмотреть новые заявки можно здесь</p>
                 <p><?= HTML::a('Заявки', ['req/index'],['class'=>'btn btn-success btn-lg']) ?></p>
            </div>-->
        </div>

    </div>
</div>
