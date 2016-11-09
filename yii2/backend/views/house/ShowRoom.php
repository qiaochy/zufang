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
		<span class="center"><h2>房间信息展示</h2></span>
		<table class="table">
			<tr>
				
				<th>房间编号</th>
				<th>房间图片</th>
				<th>房间简述</th>
				<th>房间状态</th>
				<th>房间面积</th>
				<th>房间私有设施</th>
				<th>房间价格</th>
				<th>操作</th>
			</tr>
			<?php foreach($data as $v):?>
			<tr>
				<td><?=$v['r_name']?></td>
				<td><img src="<?=$v['r_img'];?>" width="50"></td>
				<td><?=$v['r_title']?></td>
				<td>
					<?php if($v['r_status']==0){
						echo "待出租";}else{ echo "已出租";}?>
				</td>
				<td><?=$v['r_area']?></td>
				<td><?=$v['g']?></td>
				<td><?=$v['r_price']?></td>
				
				<td>
					<a href="<?= Url::to(['house-del','id'=>$v['r_id']])?>">删除 </a>
					<a href="<?= Url::to(['house-update','id'=>$v['r_id']])?>">修改 </a>
				</td>
				
			</tr>
			<?php  endforeach ?>
		</table>
	</div>
		
</body>

<!-- <script src="assets/js/jquery-1.8.2.min.js"></script> -->

</html>