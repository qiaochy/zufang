<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="well">
<table calss="table">
<?php
//简单的表单使用自带的表单
$form =ActiveForm::begin([
        'action'=>Url::toRoute(['continue']),
    'method'=>'post',
   
]);
?>
<div class="well">
	<h2 style="margin-left:200px">填写房间信息</h2>
<table class="table">
	<tr>
		<td>房间名称</td>
		<td><select name="r_name">
				<?php foreach ($room as $v) :?>		
				<option value="<?= $v['r_name'];?>"><?= $v['r_name'];?></option>
				<?php endforeach ?>
			</select></td>
	</tr>
	<tr>
		<td>房间标题</td>
		<td><input type="text" name="r_title"></td>
	</tr>
	<tr>
		<td>是否已出租</td>
		<td>
			<input type="radio" name="r_status" value='0' checked="checked">可以出租
			<input type="radio" name="r_status" value='1'>已出租
		</td>
	</tr>
	
	<tr>
		<td>房屋面积</td>
		<td><input type="text" name="r_area">㎡</td>
	</tr>
	
	<tr>
		<td>价格</td>
		<td>
			<input type="text" name="r_price">
		</td>
	</tr>
	<tr>
		<td>房间照片</td>
		<td>
			<input type="file" name="r_img">
		</td>
	</tr>
	
</table>
</div>
<?php
echo Html::submitButton('提交');
ActiveForm::end();
?>
