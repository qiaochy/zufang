<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="?r=test/index" method="post">
		<!-- 验证安全性 -->
	<input type="hidden" id="_csrf" name="<?php echo Yii::$app->request->csrfParam;?>" value="<?php echo yii::$app->request->csrfToken?>">
		<table border="1">
			<tr>
				<td>标题：</td>
				<td><input type="text" name="title" value=""></td>
			</tr>
			<tr>
				<td>内容：</td>
				<td><textarea name="message" id="" cols="15" rows="5"></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="提交">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>