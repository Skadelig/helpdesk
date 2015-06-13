<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employer */

//$this->title = $model->'Фамилия';
$this->title = $model->username; ;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Назад', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <th>Выполнено</th>
                    <th>В работе</th>
                    <th>Выполненно за этот месяц</th> 
                </thead>
                <tbody>
                    <tr>
                        <td><?= $model->done ?></td>
                        <td><?= $model->inwork ?></td>
                        <td><?= $model->thismounth ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

   

</div>