<?php 
	use yii\helpers\Html;
	use yii\grid\GridView;
	
	$this->title = 'Статистика';
	$this->params['breadcrumbs'][] = $this->title;
	
	$param = $model->findStatsinwork();
	?>
	
		 <!-- <p>
      	  <?= Html::a('Печать', ['update', 'id', ['class' => 'btn btn-primary']]) ?> 
  		</p> -->

		<SCRIPT Language="Javascript"> 
				function printit(){ 
				window.print() ; 
				} 
		</script> 
<form> 
<input TYPE="button" CLASS="for" VALUE="распечатать страницу" onClick="printit()"> 
</form>

	
	<div class="box">
		<table class="table table-striped table-bordered">
		<thead>
			<th>Текст</th>
			<th>Дата создания</th>
			<th>Дата выполнения</th>
		</thead>
			<?php
			foreach ($param as $value) {
				 if($value->Request_date)	$Request_date = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_date)->format('d-m-Y H:i:s');
	       		 if($value->Request_DataEnding) $Request_DataEnding = \Datetime::createFromFormat('Y-m-d H:i:s', $value->Request_DataEnding)->format('d-m-Y H:i:s');
             
				echo"<tr><td>".$value->Request_text."</td><td>".$value->Request_date."</td><td>".$value->Request_DataEnding."</td></tr>";
			}
			?>
		</table>
	</div>
	