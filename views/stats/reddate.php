<?php 
	use yii\helpers\Html;
	use yii\grid\GridView;
		use yii\helpers\Url;

	use app\models\Users; 
	$this->title = 'Просрочено';
	$this->params['breadcrumbs'][] = $this->title;
	
	$param = $model->findStatsreddate();
	?>
	
		<SCRIPT Language="Javascript"> 
				function printit(){ 
				window.print() ; 
				} 
		</script> 
	<form class="report"> 
			<button class="btn btn-stats" onclick="printit()"><i class="fa fa-print fa-2x"></i><br>Печать</button>
			<a href="<?=URL::to(['stats/reportreddate'])?>" class="btn btn-stats"><i class="fa fa-file-pdf-o fa-2x"></i>
			<br>PDF</a>
	</form>
	
	
	<div class="box">
		<table class="table table-striped table-bordered">
		<tr>
			<td>Текст</td>
			<td>Дата выполнения</td>
			<td>Дата фактического выполенения</td>
			<td>Исполнитель</td>
		</tr>
			<?php
				foreach ($param as $value) {
					 if($value->Request_FacticalDateEnding)	$Request_FacticalDateEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_FacticalDateEnding)->format('d-m-Y H:i:s');
	       			 if($value->Request_DataEnding) $Request_DataEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_DataEnding)->format('d-m-Y H:i:s');
             
				echo"<tr><td>".$value->Request_text."</td><td>".$value->Request_FacticalDateEnding."</td><td>".$value->Request_DataEnding."</td><td>".'Admin'."</td></tr>";
			}
			?>
		</table>
	</div>
	