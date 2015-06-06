<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Executionstatus */

$this->title = 'Update Executionstatus: ' . ' ' . $model->Executionstatus_ID;
$this->params['breadcrumbs'][] = ['label' => 'Executionstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Executionstatus_ID, 'url' => ['view', 'id' => $model->Executionstatus_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="executionstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
