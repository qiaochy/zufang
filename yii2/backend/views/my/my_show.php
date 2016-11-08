<html>
<div class="well">
	<center><h2>关于公司</h2></center>
	


	
		
	<a href="?r=my/upload"><span class="label label-success arrowed">编辑公司信息</span></a>
	<br>
	<br>

		
		<table class="table">
			<tr>
				<th>标题</th>
				<td><?php echo $res['title']?></td>
				
			</tr>
			<tr>
				<th>内容</th>
				<td><?php echo $res['content']?></td>
				
			</tr>
			<tr>
				<th>图片</th>
				<td><img src="<?php echo $res['img']?>" width="300"></td>
				
			</tr>
			<tr>
				<th>联系</th>
				<td><?php echo $res['phone']?></td>				
			</tr>
			
		</table>
	

	</div>
</html>