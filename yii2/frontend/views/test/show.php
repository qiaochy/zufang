<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="well">
	<h2>test显示</h2>
	<table class="table">
		<tr>
			<th>序号</th>
			<th>标题</th>
			<th>内容</th>
			<th>操作</th>
		</tr>
		<?php foreach($model as $v){?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['title']?></td>
			<td><?php echo $v['message']?></td>
			<td><a href= "<?= Url::to([ 'del','id'=>$v['id']]); ?>" >删除</a></td>
		</tr>
		<?php }?>
	</table>
</div>
    
      <?= LinkPager::widget(['pagination' => $pages]); ?>