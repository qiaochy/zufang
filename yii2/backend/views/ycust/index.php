<?php use yii\widgets\LinkPager; ?>
<table class="table">
	<th>编号</th>
	<th>意向客户姓名</th>
	<th>意向客户电话</th>
	<th>意向客户描述</th>
	<th>访问时间</th>
	<th>处理时间</th>
	<th>处理状态</th>
	<th>操作</th>
	<?php foreach($ycustomer as $k=>$v){?>
		<tr>
			<td><?php echo $v["y_id"]?></td>
			<td><?php echo $v["y_name"]?></td>
			<td><?php echo $v["y_phone"]?></td>
			<td><?php echo $v["y_desc"]?></td>
			<td><?php echo date("Y-m-d H:i:s",$v["y_time"])?></td>
			<td>
			<?php if(!empty($v["s_time"])){?>
				<?php echo date("Y-m-d H:i:s",$v["s_time"])?>
			<?php }?>
			</td>
			<td>
				<?php if($v['y_status']==0){?>
				未处理
				<?php }else{?>
				已处理
				<?php } ?>
			</td>
			<td>
				<a class="badge badge-pink del" href='javascript:void(0)' id='<?php echo $v["y_id"]?>'>删除</a>|
				<a  class="badge badge-purple" href='?r=ycust/save&id=<?php echo $v["y_id"]?>'>编辑</a>
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
<script src="assets/js/jquery-1.8.2.min.js"></script>         
<script>
	$(".del").click(function(){
		var id = $(this).attr("id");
		var obj = $(this);
		$.ajax({
		   type: "GET",
		   url: "?r=ycust/del",
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