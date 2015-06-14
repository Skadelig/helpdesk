<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Defects */

$this->title = $model->Defects_nm;
$this->params['breadcrumbs'][] = ['label' => 'Дефекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="defects-view">

  
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->Defects_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Defects_ID], [
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
            'Defects_ID',
            'Defects_nm:ntext',
        ],
    ]) ?>

</div>
