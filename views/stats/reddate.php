<?php 
	use yii\helpers\Html;
	use yii\grid\GridView;
	use app\models\Users; 
	$this->title = 'Статистика';
	$this->params['breadcrumbs'][] = $this->title;
	
	$param = $model->findStatsreddate();
	?>
	
		
	
	<div class="box">
		<table class="table table-striped table-bordered">
		<thead>
			<th>Текст</th>
			<th>Дата выполнения</th>
			<th>Дата фактического выполенения</th>
			<th>Исполнитель</th>
		</thead>
			<?php
				foreach ($param as $value) {
					 if($value->Request_FacticalDateEnding)	$Request_FacticalDateEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_FacticalDateEnding)->format('d-m-Y H:i:s');
	       			 if($value->Request_DataEnding) $Request_DataEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_DataEnding)->format('d-m-Y H:i:s');
             
				echo"<tr><td>".$value->Request_text."</td><td>".$value->Request_FacticalDateEnding."</td><td>".$value->Request_DataEnding."</td><td>".'Admin'."</td></tr>";
			}
			?>
		</table>
	</div>
	