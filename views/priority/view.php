<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Priority */

$this->title = $model->Priority_nm;
$this->params['breadcrumbs'][] = ['label' => 'Приоритет заявок', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-view">

     <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Priority_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Priority_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить это?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Priority_ID',
            'Priority_nm',
            'Priority_about:ntext',
        ],
    ]) ?>

</div>
