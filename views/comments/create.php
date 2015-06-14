<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = 'Создать комментарий';
$this->params['breadcrumbs'][] = ['label' => 'Комментарий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-create">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
