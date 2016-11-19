<?php 
use yii\bootstrap\Alert;
?>
<form action="?r=ad/add" method="post" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td>广告标题：</td>
			<td><input type="text" name="ad_title" value=""></td>
		</tr>
		<tr>
			<td>广告图片：</td>
			<td><input type="file" name='ad_img' value=""></td>
		</tr>
		<tr>
			<td>是否显示：</td>
			<td>
				<input type="radio" name="is_show" value="1" checked="checked">是
				<input type="radio" name="is_show" value="0" >否
			</td>
		</tr>
		<tr>
			<td>URL链接:</td>
			<td><input type="text" name="ad_url" value=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
</form>
