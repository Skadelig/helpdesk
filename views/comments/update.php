<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = 'Изменить комментарий № ' . ' ' . $model->Comment_ID;
$this->params['breadcrumbs'][] = ['label' => 'Комментарии', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Comment_ID, 'url' => ['view', 'id' => $model->Comment_ID]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="comments-update">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
