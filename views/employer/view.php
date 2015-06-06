<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employer */

$this->title = $model->Employer_ID;
$this->params['breadcrumbs'][] = ['label' => 'Employers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Employer_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Employer_ID], [
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
            'Employer_ID',
            'Job_ID',
            'Users_id',
            'Department_ID',
            'Employer_surname:ntext',
            'Employer_name:ntext',
            'Employer_birthday',
        ],
    ]) ?>

</div>
