<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1">
	<th>编号</th>
	<th>标题</th>
	<th>内容</th>
	<th>操作</th>
	<?php foreach($msg as $k=>$v){ ?>
	<tr>
		<td><?php echo $v['id']?></td>
		<td><?php echo $v['title']?></td>
		<td><?php echo $v['message']?></td>
		<td>
			<a href="del?id=<?php echo $v['id']?>">删除</a>
			<a href="save?id=<?php echo $v['id']?>">修改</a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>