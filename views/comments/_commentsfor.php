<?php
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Requests;
use app\models\Users;

// print_r($comments);

?>
<table class="table table-striped">
<thead>
	<tr>
		<th>Дата комментария</th>
		<th>Комментарий</th>
	</tr>
</thead>
<col style="width:200px">
<?php
foreach($comments as $key => $value){
?>
	<tr>
  	<td><?php echo   \Datetime::createFromFormat('Y-m-d H:i:s', $value->Comment_date)->format('d.m.Y H:i:s')
            ?></td>
  	<td><?php  echo $value->Comment_txt?></td>
	</tr>
	<?php
}

?>
</table>