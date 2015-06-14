<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Employer */

$this->title = 'Создать сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-create">

  <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
