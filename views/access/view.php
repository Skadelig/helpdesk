<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Access */

$this->title = $model->Access_nm;
$this->params['breadcrumbs'][] = ['label' => 'Роли', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-view">

  
    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Access_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Access_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите это удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Access_ID',
            'Access_nm',
            'Access_ctrl:boolean',
            'Access_redirect:boolean',
            'Access_deprt:boolean',
            'Access_prvt:boolean',
            'Access_otherusr:boolean',
            'Access_othrdeprt:boolean',
            'Access_statis:boolean',
            'Access_comnt:boolean',
        ],
    ]) ?>

</div>
