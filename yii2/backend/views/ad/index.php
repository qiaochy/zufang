<?php use yii\widgets\LinkPager; ?>
<table class="table">
	<th>编号</th>
	<th>广告标题</th>
	<th>广告图片</th>
	<th>广告链接</th>
	<th>是否显示</th>
	<th>操作</th>
	<?php foreach($ad as $k=>$v){?>
		<tr>
			<td><?php echo $v["ad_id"]?></td>
			<td><?php echo $v["ad_title"]?></td>
			<td><img src="<?php echo $v['ad_img']?>" width="166" height="88" alt=""></td>
			<td><?php echo $v["ad_url"]?></td>
			<td>
				<?php if($v["is_show"]=="1"){?>
				是
				<?php }else{?>
				否
				<?php }?>
			</td>

			<td>
				<a class="badge badge-pink del" href='javascript:void(0)'id='<?php echo $v["ad_id"]?>'>删除</a>|
				<a class="badge badge-purple" href='?r=ad/save&id=<?php echo $v["ad_id"]?>'>编辑</a>
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
		   url: "?r=ad/del",
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