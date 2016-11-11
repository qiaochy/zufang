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
	<tr>
		<td>房屋详细地址</td>
		<td>
			<input type="text" name="detail">
		</td>
	</tr>
	<tr>
		<td>地图经度</td>
		<td>
			<input type="text" name="coord">
		</td>
	</tr>
	<tr>
		<td>地图纬度</td>
		<td>
			<input type="text" name="roord">
		</td>
	</tr>
	<tr>
		<td>点击地图添加地址</td>
		<td>
			<div id="allmap"></div>
		</td>
		<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
		#allmap {width:80%;height:460px;}
		</style>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Gr68Lju8r8SZ4MD3hPGskpNlsrTmBCT9"></script>
			<script type="text/javascript">
		// 百度地图API功能
		var map = new BMap.Map("allmap");
		var point = new BMap.Point(116.331398,39.897445);
		map.centerAndZoom(point,12);
		var geoc = new BMap.Geocoder();    
		//经纬度
		function showInfo(e){
			$("input[name='coord']").val(e.point.lng);
			$("input[name='roord']").val(e.point.lat);
		
		}
		map.addEventListener("click", showInfo);
		//详细地址
		map.addEventListener("click", function(e){        
			var pt = e.point;
			geoc.getLocation(pt, function(rs){
				var addComp = rs.addressComponents;
				$("input[name='detail']").val(addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber);
				//console.log(addComp);
			});        
		});
		map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
		</script>
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

