<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Requests */

$this->title = $model->Request_ID;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Request_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Request_ID], [
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
            'Request_date',
            'Request_text:ntext',
            'Request_ID',
            'Executionstatus_ID',
            'Employer_ID',
            'Priority_ID',
            'Users_id',
            'Defects_ID',
            'Request_FacticalDateEnding',
            'Request_DataEnding',
        ],
    ]) ?>

</div>
