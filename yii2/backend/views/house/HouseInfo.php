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
        'action'=>Url::toRoute(['do-info']),
    'method'=>'post',
   
]);
?>
<div class="well">
	<h2 style="margin-left:200px">完善房屋信息</h2>
<table class="table">
	<tr>
		<td>房屋名称</td>
		<td><input type="text" name="h_name"></td>
	</tr>
	<tr>
		<td >房屋类型</td>
		<td>
			<select name="cat_id"  id="cat_id">
			<?php foreach ($cat as $v) :?>		
				<option value="<?= $v['cat_id'];?>"><?= $v['cat_name'];?></option>
				<?php endforeach ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>房屋所在地区</td>
		<td>海淀区
			<select name="region_id">
				<?php foreach ($region as $v) :?>		
				<option value="<?= $v['region_id'];?>"><?= $v['region_name'];?></option>
				<?php endforeach ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>是否已出租</td>
		<td>
			<input type="radio" name="status" value='0' checked="checked">可以出租
			<input type="radio" name="status" value='1'>已出租
		</td>
	</tr>
	<tr>
		<td>房屋评价</td>
		<td>
			<textarea name="survey"  cols="15" rows="4"></textarea>
		</td>
	</tr>
	<tr>
		<td>房屋面积</td>
		<td><input type="text" name="area">㎡</td>
	</tr>
	<tr>
		<td>房屋朝向</td>
		<td>
			<select name="direction">
				<?php foreach ($orientation as $v) :?>		
				<option value="<?= $v['did'];?>"><?= $v['direct'];?></option>
				<?php endforeach ?>
			</select></td>
		</td>
	</tr>
	<tr>
		<td>支付方式</td>
		<td>
			<select name="pay">
				<?php foreach ($pattern as $v) :?>		
				<option value="<?= $v['wid'];?>"><?= $v['ways'];?></option>
				<?php endforeach ?>
			</select>
		</td>
	</tr>
	
</table>
</div>
<?php
echo Html::submitButton('提交');
ActiveForm::end();
?>
</table>
</div>
<!-- <html>
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script>
$("#cat_id").change(function(){
	
})
</script>
</html>
 -->