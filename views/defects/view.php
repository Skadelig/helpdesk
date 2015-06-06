<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Defects */

$this->title = $model->Defects_ID;
$this->params['breadcrumbs'][] = ['label' => 'Defects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="defects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->Defects_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Defects_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
