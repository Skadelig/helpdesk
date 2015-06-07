<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Priority */

$this->title = 'Создать приоритет';
$this->params['breadcrumbs'][] = ['label' => 'Приоритет заявок', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
