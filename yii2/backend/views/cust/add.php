<?php 
use yii\bootstrap\Alert;
use yii\widgets\ActiveForm;
?>

<?php
$form = ActiveForm::begin(['action'=>['cust/add'],'method'=>'post','options' => ['enctype' => 'multipart/form-data']]); 
?>

	<table class="table">
		<tr>
			<td>客户姓名：</td>
			<td><input type="text" name="cust_name" value=""></td>
		</tr>
		<tr>
			<td>客户性别：</td>
			<td>
				<input type="radio" name="cust_sex" value="1" checked="checked">男
				<input type="radio" name="cust_sex" value="2">女
			</td>
		</tr>
		<tr>
			<td>客户手机号：</td>
			<td><input type="text" name="cust_phone" value=""></td>
		</tr>
		<tr>
			<td>客户身份证号：</td>
			<td><input type="text" name="cust_card" value=""></td>
		</tr>
		<tr>
			<td>客户身份证照片：</td>
			<td><?= $form->field($model, 'file')->fileInput() ?></td>
		</tr>
		<tr>
			<td>租赁房屋</td>
			<td><select name="h_id" id="">
				<option value="1">1</option>
				<option value="2">2</option>
			</select></td>
		</tr>
		<tr>
			<td>起租时间：</td>
			<td><input type="text" name="start_time" value=""></td>
		</tr>
		<tr>
			<td>到期时间：</td>
			<td><input type="text" name="end_time" value=""></td>
		</tr>
		<tr>
			<td>客户备注：</td>
			<td><textarea name="cust_desc" id="" cols="15" rows="5"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
<?php ActiveForm::end(); ?>
		