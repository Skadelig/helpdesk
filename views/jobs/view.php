<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jobs */

$this->title = $model->Job_name;
$this->params['breadcrumbs'][] = ['label' => 'Должности', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Job_ID], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Job_ID',
            'Job_name',
            'Job_responsibility',
        ],
    ]) ?>

</div>
