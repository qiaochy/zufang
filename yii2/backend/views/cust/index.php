<?php use yii\widgets\LinkPager; ?>
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
				<a href='?r=cust/del&id=<?php echo $v["cust_id"]?>'>删除</a>|
				<a href='?r=cust/save&id=<?php echo $v["cust_id"]?>'>编辑</a>
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