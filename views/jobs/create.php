<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jobs */

$this->title = 'Создать должность';
$this->params['breadcrumbs'][] = ['label' => 'Должности', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-create">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
