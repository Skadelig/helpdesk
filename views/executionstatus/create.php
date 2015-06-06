<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Executionstatus */

$this->title = 'Create Executionstatus';
$this->params['breadcrumbs'][] = ['label' => 'Executionstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="executionstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
