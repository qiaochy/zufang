<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="save_data" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<table>
			<tr>
				<td>标题：</td>
				<td><input type="text" name="title" value="<?php echo $data['title'];?>"></td>
			</tr>
			<tr>
				<td>内容：</td>
				<td><textarea name="message" id="" cols="15" rows="5"><?php echo $data['message'];?></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="修改"></td>
			</tr>
		</table>
	</form>
</body>
</html>