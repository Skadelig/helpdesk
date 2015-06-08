<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
$this->title = 'Заявки';
?>
<div class="site-index">
        <div class="row">
            <div class="col-lg-12">
           <?php if(Yii::$app->user->isGuest){

            }else{
                ?>
                <?= Html::a('Заявки', ['req/index']) ?>+<br>
                <?= Html::a('Роли', ['access/index']) ?><br>
                <?= Html::a('Комментарии', ['comments/index']) ?>+<br>
                <?= Html::a('Дефекты', ['defects/index']) ?>+<br>
                <?= Html::a('Отделы', ['department/index']) ?>+<br>
                <?= Html::a('Сотрудники', ['employer/index']) ?>+<br>
                <?= Html::a('Должности', ['jobs/index']) ?>+<br>
                <?= Html::a('Приоритет', ['priority/index']) ?>+<br>
               
                <?= Html::a('Пользователи', ['users/index']) ?>+<br>
                <?php
            }?>
           

            </div>
        </div>
   

    <div class="body-content">
        
        <div class="row">
            <div class="col-lg-12">
                <?php 
                    if(Yii::$app->session->hasFlash('d')){
                        echo "true1";
                    }
                ?>

            </div>
            
        </div>

    </div>
</div>
