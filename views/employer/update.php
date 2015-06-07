<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employer */

$this->title = 'Обновить сотрудника: ' . ' ' . $model->Employer_ID;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Employer_ID, 'url' => ['view', 'id' => $model->Employer_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="employer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
