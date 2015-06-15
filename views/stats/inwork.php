<?php 
	use yii\helpers\Html;
	use yii\grid\GridView;
	
	$this->title = 'Статистика';
	$this->params['breadcrumbs'][] = $this->title;
	
	$param = $model->findStatsinwork();
	?>
	
		
	
	<div class="box">
		<table class="table table-striped table-bordered">
		<thead>
			<th>Текст</th>
			<th>Дата создания</th>
			<th>Дата выполнения</th>
		</thead>
			<?php
			foreach ($param as $value) {
				echo"<tr><td>".$value->Request_text."</td><td>".$value->Request_date."</td><td>".$value->Request_DataEnding."</td></tr>";
			}
			?>
		</table>
	</div>
	