<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Requests */

$this->title = 'Обновить заявки: ' . ' ' . $model->Request_ID;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Request_ID, 'url' => ['view', 'id' => $model->Request_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="requests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
