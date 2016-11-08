<form action="?r=cust/save" method="post" enctype="multipart/form-data">
<input type="hidden" name='cust_id' value="<?php echo $one['cust_id']?>">
	<table class="table">
		<tr>
			<td>客户姓名：</td>
			<td><input type="text" name="cust_name" value="<?php echo $one['cust_name']?>"></td>
		</tr>
		<tr>
			<td>客户性别：</td>
			<td>
			<?php if($one['cust_sex']=="1"){?>
				<input type="radio" class="ace" name="cust_sex" value="1" checked="checked"><span class="lbl"> 男</span>
				<input type="radio" class="ace" name="cust_sex" value="2"><span class="lbl"> 女</span>
			<?php }else{?>
				<input type="radio" class="ace" name="cust_sex" value="1"><span class="lbl"> 男</span>
				<input type="radio" class="ace" name="cust_sex" value="2" checked="checked"><span class="lbl"> 女</span>		
			<?php }?>					
			</td>
		</tr>
		<tr>
			<td>客户手机号：</td>
			<td><input type="text" name="cust_phone" value="<?php echo $one['cust_phone']?>"></td>
		</tr>
		<tr>
			<td>客户身份证号：</td>
			<td><input type="text" name="cust_card" value="<?php echo $one['cust_card']?>"></td>
		</tr>
		<tr>
			<td>客户身份证照片：</td>
			<td><input type="file" name="card_img" value=""></td>
		</tr>
		<tr>
			<td>租赁房屋</td>
			<td><select name="h_id" id="">
				<option value="1">1</option>
				<option value="2">2</option>
			</select></td>
		</tr>
		<tr>
			<td>起租时间：</td>
			<td><input type="text" name="start_time" value="<?php echo $one['start_time']?>"></td>
		</tr>
		<tr>
			<td>到期时间：</td>
			<td><input type="text" name="end_time" value="<?php echo $one['end_time']?>"></td>
		</tr>
		<tr>
			<td>客户备注：</td>
			<td><textarea name="cust_desc" id="" cols="15" rows="5"><?php echo $one['cust_desc']?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  class="btn btn-sm btn-success" value="修改"></td>
		</tr>
	</table>
</form>
