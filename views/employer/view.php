<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Jobs;
/* @var $this yii\web\View */
/* @var $model app\models\Employer */

//$this->title = $model->'Фамилия';
$this->title = $model->Employer_name.' '.$model->Employer_surname;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Employer_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Статистика сотрудника', ['userstats', 'id' => $model->Employer_ID], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Employer_ID',
            'jobs.Job_name',
         
            // 'Users_id',
            'department.Department_name',
            'Employer_surname',
            'Employer_name',
            [
                'attribute'=>'Employer_birthday',
                'format' => ['date', 'php:d.m.Y h:i:s']
            ],
        ],
    ]) ?>

</div>
