<?php 
	use yii\helpers\Html;
	use yii\grid\GridView;
		use yii\helpers\Url;

	$this->title = 'Выполнено в этом месяце';
	$this->params['breadcrumbs'][] = $this->title;
	
	$param = $model->findStatsmounth();
	?>
	
		<SCRIPT Language="Javascript"> 
				function printit(){ 
				window.print() ; 
				} 
		</script> 

		<form class="report"> 
			<button class="btn btn-stats" onclick="printit()"><i class="fa fa-print fa-2x"></i><br>Печать</button>
			<a href="<?=URL::to(['stats/reportthismonth'])?>" class="btn btn-stats"><i class="fa fa-file-pdf-o fa-2x"></i>
			<br>PDF</a>
	</form>

	<div class="box">
		<table class="table table-striped table-bordered">
		<tr>
			<td>Текст</td>
			<td>Дата создания</td>
			<td>Дата выполнения</td>
		</tr>
			<?php
			foreach ($param as $value) {
				 if($value->Request_date)	$Request_date = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_date)->format('d-m-Y H:i:s');
	      		 if($value->Request_DataEnding) $Request_DataEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_DataEnding)->format('d-m-Y H:i:s');
             
				echo"<tr><td>".$value->Request_text."</td><td>".$value->Request_date."</td><td>".$value->Request_DataEnding."</td></tr>";
			}
			?>
		</table>
	</div>
	