<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employer */

$this->title = 'Update Employer: ' . ' ' . $model->Employer_ID;
$this->params['breadcrumbs'][] = ['label' => 'Employers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Employer_ID, 'url' => ['view', 'id' => $model->Employer_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
