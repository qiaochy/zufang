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
		<table class="table">
			<tr>
				<th>分类编号</th>
				<th>分类名称</th>
				<th>分类描述</th>
				<th>分类排序</th>
				<th>是否显示在导航栏</th>
				<th>是否显示在首页</th>
				<th>操作</th>
			</tr>
			<?php foreach($data as $v):?>
			<tr>
				<td><?= $v['cat_id'];?></td>
				<td><?= $v['cat_name'];?></td>
				<td><?= $v['cat_desc'];?></td>
				<td><?= $v['sort'];?></td>
				<td>
					<?php if($v['is_nav']==1){
						echo "是";}else{ echo "否";}?>
				</td>
				<td>
					<?php if($v['is_show']==1){
						echo "是";}else{ echo "否";}?>
				</td>
				<td>
					<a href="<?= Url::to(['cat-del','id'=>$v['cat_id']])?>">删除 </a>
					<a href="<?= Url::to(['cat-update','id'=>$v['cat_id']])?>">修改 </a>
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
</html>