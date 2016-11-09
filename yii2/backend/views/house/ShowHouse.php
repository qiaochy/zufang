<?php
     use yii\widgets\LinkPager;
     use yii\helpers\Url;
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>分类列表</title>
</head>
<body>	
	<div class="well">
		<span class="center"><h2>房屋信息展示</h2></span>
		<table class="table">
			<tr>
				<th>查看房间</th>
				<th>房屋编号</th>
				<th>房屋名称</th>
				<th>房屋状态</th>
				
				<th>房屋概况</th>
				<th>付款方式</th>
				<th>操作</th>
			</tr>
			<?php foreach($data as $v):?>
			<tr>
				<td ><a href="<?= Url::to(['show-room','id'=>$v['h_id']])?>">进入列表</a></td>
				<td><?=$v['h_id']?></td>
				<td><?=$v['h_name']?></td>
				<td>
					<?php if($v['status']==0){
						echo "待出租";}else{ echo "已出租";}?>
				</td>
				<td><?=$v['area']?>㎡|<?=$v['direct']?></td>
				<td><?=$v['ways']?></td>
				<td>
					<a href="<?= Url::to(['show-house','id'=>$v['h_id']])?>">删除 </a>
					<a href="<?= Url::to(['house-update','id'=>$v['h_id']])?>">修改 </a>
				</td>
				
			</tr>
			<?php  endforeach ?>
		</table>
	</div>
			<?=
		LinkPager::widget([
		      'pagination' => $pages,
		    ]);
		?> 
</body>

<script src="assets/js/jquery-1.8.2.min.js"></script>
<script>
$(".btn").trigger(function(){
	alert(23);
})
</script>
</html>
