<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Requests */

$this->title = 'Создать заявку';
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-create">

 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
