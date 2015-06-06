<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Access */

$this->title = 'Update Access: ' . ' ' . $model->Access_ID;
$this->params['breadcrumbs'][] = ['label' => 'Accesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Access_ID, 'url' => ['view', 'id' => $model->Access_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="access-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
