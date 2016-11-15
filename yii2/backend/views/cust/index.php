<?php use yii\widgets\LinkPager; ?>
<div class="well">
	<form action="?r=cust/index" method="post">
		<div class="help-block">
			<input type="text"  name="like">&nbsp&nbsp&nbsp<input type="submit" class="btn btn-sm btn-success" value="搜索名称">
		</div>
		
	</form>
	
<table class="table">
	<th>编号</th>
	<th>客户姓名</th>
	<th>客户性别</th>
	<th>客户电话</th>
	<th>客户身份证</th>
	<th>客户身份证照片</th>
	<th>租赁房屋</th>
	<th>起租时间</th>
	<th>到期日期</th>
	<th>客户描述</th>
	<th>操作</th>
	<?php foreach($customer as $k=>$v){?>
		<tr>
			<td><?php echo $v["cust_id"]?></td>
			<td><?php echo $v["cust_name"]?></td>
			<td>
				<?php if($v["cust_sex"]=="1"){?>
				男
				<?php }else{?>
				女
				<?php }?>
			</td>
			<td><?php echo $v["cust_phone"]?></td>
			<td><?php echo $v["cust_card"]?></td>
			<td><img src="<?php echo $v["card_img"]?>" width="166" height="88" alt=""></td>
			<td><?php echo $v["h_id"]?></td>
			<td><?php echo $v["start_time"]?></td>
			<td><?php echo $v["end_time"]?></td>
			<td><?php echo $v["cust_desc"]?></td>
			<td>
				<a class="badge badge-pink del" href='javascript:void(0)' id='<?php echo $v["cust_id"]?>'>删除</a>|
				<a class="badge badge-purple" href='?r=cust/save&id=<?php echo $v["cust_id"]?>'>编辑</a>
			</td>
		</tr>
	<?php }?>
</table>
	<?php
        echo LinkPager::widget([
            'pagination' => $pagination,
            'firstPageLabel' => '首页',
            'lastPageLabel' => '末页',
            'prevPageLabel' => '上一页',
            'nextPageLabel' => '下一页',
        ]);
        ?> 
        </div>
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script>
	$(".del").click(function(){
		var id = $(this).attr("id");
		var obj = $(this);
		$.ajax({
		   type: "GET",
		   url: "?r=cust/del",
		   data: {
		   	id:id
		   },
		   success: function(msg){
		     if(msg==1){
		     	obj.parents("tr").remove();
		     }
		   }
		});
	});
</script>        