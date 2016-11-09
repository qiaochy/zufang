<?php  
use yii\helpers\Html;  
use yii\widgets\ActiveForm;  
?>  
<!doctype html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Document</title>  
</head>  
<body>  

<?php if(Yii::$app->session->hasFlash('success')):?>  
    <div class="alert alert-danger">  
        <?=Yii::$app->session->getFlash('success')?>  
    </div>  
<?php endif ?>  
<?php $form=ActiveForm::begin([  
    'id'=>'upload',  
    'enableAjaxValidation' => false,  
    'options'=>['enctype'=>'multipart/form-data']  
]);  
?>  
<div class="well">
	<h2 style="margin-left:180px">完善房屋信息</h2>
<table class="table" style="margin-left:166px;">
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
		<td>
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
			<input type="radio" name="status" class="ace" value='0' checked="checked"><span class="lbl"> 待出租</span>
			<input type="radio" name="status" class="ace" value='1'><span class="lbl"> 已出租</span>
		</td>
	</tr>
	<tr >
		<td >房屋公共配置</td>
		<td style="width:1000px">
			<?php foreach ($conf as  $v) {?>
			<span class="lbl"><?= $v['con_name'];?></span><input type="checkbox" class="ace" name="con_id[]" value="<?= $v['con_id'];?>">
			<?php }?>&nbsp&nbsp
			
		</td>
	</tr>
	<tr>
		<td>房屋评价</td>
		<td>
			<textarea name="survey"   cols="15" rows="4"></textarea>
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
<div style="margin-left:200px;">
<?= $form->field($model, 'file[]')->fileInput(['multiple' => true]);?>  
<?=  Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>  
<?php ActiveForm::end(); ?>  
</div>
</body>  
</html>  

