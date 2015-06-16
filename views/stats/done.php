<?php 
	use yii\helpers\Html;
	use yii\grid\GridView;
	use kartik\export\ExportMenu; 

	$this->title = 'Статистика';
	$this->params['breadcrumbs'][] = $this->title;
	
	$param = $model->findStatsdone();
	?>
	
	<SCRIPT Language="Javascript"> 
				function printit(){ 
				window.print() ; 
				} 
	</script> 
	<form> 
			<input TYPE="button" CLASS="for" VALUE="Печать" onClick="printit()"> 
	</form>

	 <div class="box">
		<table class="table table-striped table-bordered">
		<thead>
			<th>Текст</th>
			<th>Дата создания</th>
			<th>Дата выполнения</th>
		</thead>
			<?php
			foreach ($param as $value) 
			{
	        if($value->Request_date)	$Request_date = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_date)->format('d-m-Y H:i:s');
	        if($value->Request_DataEnding) $Request_DataEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_DataEnding)->format('d-m-Y H:i:s');
             
				echo"<tr><td>".$value->Request_text."</td><td>".$Request_date."</td><td>".$Request_DataEnding."</td></tr>";
			}

			?>
		</table>
	</div>  