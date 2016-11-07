<!DOCTYPE HTML>
<meta charset="utf-8">
<html>
<?php
use yii\widgets\ActiveForm;
$form = ActiveForm::begin(['action' => ['my/upload'],'method'=>'post','options' => ['enctype' => 'multipart/form-data']]);
?>
<div class="well">
	<h4>公司信息添加</h4>
<div class="well">
	<a href="?r=my/index">返回信息列表</a>

<body>
	<table class="table">
		<tr>
			<td>标题</td>
			<td><input type="text" name="title" value="<?php echo $res['title']?>"></td>
		</tr>
		<tr>
			<td>图片</td>
			<td><?= $form->field($model, 'file')->fileInput() ?></td>

		</tr>
		<tr>
			<td>内容</td>
			<td><textarea name="content" id="container" cols="30" rows="10"><?php echo $res['content']?></textarea></td>
		</tr>
		<tr>
			<td>联系</td>
			<td><input type="text" name="phone" value="<?php echo $res['phone']?>"></td>
		</tr>
		<tr>
			<td>启用</td>
			<td>
				<?php if($res['status']==1){?>
				<input type="radio" name="status" value="1" checked="checked">是
				<input type="radio" name="status" value="0">否
				<?php }else{?>
				<input type="radio" name="status" value="1">是
				<input type="radio" name="status" value="0" checked="checked">否
				<?php }?>
			</td>
		</tr>
		<tr>
			<td><button>修改</button></td>
		</tr>
	</table>
   
   
    <!-- 配置文件 -->
    <script type="text/javascript" src="edit/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="edit/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
    <script type="text/javascript">
    var editor = new baidu.editor.ui.Editor({
        UEDITOR_HOME_URL: 'edit/Content/ueditor/',//配置编辑器路径
        iframeCssUrl: 'edit/Content/ueditor/themes/iframe.css',//样式路径
        initialContent: '欢迎使用ueditor',//初始化编辑器内容
        autoHeightEnabled: true,//高度自动增长
        minFrameHeight: 600,//最小高度
        initialFrameWidth:500
    });
    editor.render('Content');
</script>
<?php ActiveForm::end(); ?>
</body>
</div>
</div>
</html>