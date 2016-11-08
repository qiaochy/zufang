<form action="?r=ycust/save" method="post" enctype="multipart/form-data">
<input type="hidden" name='y_id' value="<?php echo $one['y_id']?>">
	<table class="table">
		<tr>
			<td>意向客户姓名：</td>
			<td><input type="text" name="y_name" value="<?php echo $one['y_name']?>"></td>
		</tr>
		<tr>
			<td>意向客户手机号：</td>
			<td><input type="text" name="y_phone" value="<?php echo $one['y_phone']?>"></td>
		</tr>
		<tr>
			<td>处理状态</td>
			<td><select name="y_status" id="">
				<option value="0">未处理</option>
				<option value="1">已处理</option>
			</select></td>
		</tr>
		<tr>
			<td>客户备注：</td>
			<td><textarea name="y_desc" id="" cols="15" rows="5"><?php echo $one['y_desc']?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  class="btn btn-sm btn-success" value="修改"></td>
		</tr>
	</table>
</form>
