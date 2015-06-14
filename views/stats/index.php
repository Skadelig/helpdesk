<?php
	use yii\helpers\Html;
	use yii\grid\GridView;
	
	$this->title = 'Статистика';
	$this->params['breadcrumbs'][] = $this->title;
?>
<div stats-index>
	  <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <th>Выполнено</th>
                    <th>В работе</th>
                    <th>Выполненно за этот месяц</th> 
                </thead>
                <tbody>
                    <tr>
                        <td><?= $model->done ?></td>
                        <td><?= $model->inwork ?></td>
                        <td><?= $model->thismounth ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>