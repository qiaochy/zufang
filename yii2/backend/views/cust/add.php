<?php 
use yii\bootstrap\Alert;
use yii\widgets\ActiveForm;
?>

<?php
$form = ActiveForm::begin(['action'=>['cust/add'],'method'=>'post','options' => ['enctype' => 'multipart/form-data']]); 
?>
<script src="My97DatePicker/WdatePicker.js"></script>
	<table class="table">
		<tr>
			<td>客户姓名：</td>
			<td><input type="text" name="cust_name" value=""></td>
		</tr>
		<tr>
			<td>客户性别：</td>
			<td>
				<input type="radio" class="ace" name="cust_sex" value="1" checked="checked"><span class="lbl"> 男</span>
				<input type="radio" class="ace" name="cust_sex" value="2"><span class="lbl"> 女</span>
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
			<td><select  name="h_id" id="" class="form-control">
				<option value="1">1</option>
				<option value="2">2</option>
			</select></td>
		</tr>
		<tr>
			<td>起租时间：</td>
			<td><input type="text"  name="start_time" value="" class="Wdate" onFocus="WdatePicker({lang:'zh-cn'})"></td>
		</tr>
		<tr>
			<td>到期时间：</td>
			<td><input type="text" name="end_time" value="" class="Wdate" onFocus="WdatePicker({lang:'zh-cn'})"></td>
		</tr>
		<tr>
			<td>客户备注：</td>
			<td><textarea name="cust_desc" id="" cols="15" rows="5"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-sm btn-success" value="提交"></td>
		</tr>
	</table>
<?php ActiveForm::end(); ?>
		