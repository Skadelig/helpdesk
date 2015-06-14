<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Defects */

$this->title = 'Добавить дефект';
$this->params['breadcrumbs'][] = ['label' => 'Дефекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="defects-create">

  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
