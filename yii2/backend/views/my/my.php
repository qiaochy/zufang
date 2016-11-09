<!DOCTYPE HTML>
<meta charset="utf-8">
<html>
<?php
use yii\widgets\ActiveForm;
$form = ActiveForm::begin(['action' => ['my/upload'],'method'=>'post','options' => ['enctype' => 'multipart/form-data']]);
?>
<div class="well">
	<center><h4 >公司信息</h4></center>
	

	<a  href="?r=my/index"><span class="label label-success arrowed">返回信息列表</span></a>

<body>
	<table class="table">
		<tr>
			<td>标题&nbsp&nbsp&nbsp</td>
			<td><input type="text" name="title" value="<?php echo $res['title']?>"></td>
		</tr>
		<tr>
			<td>联系</td>
			<td><input type="text" name="phone" value="<?php echo $res['phone']?>"></td>
		</tr>
		<tr>
			<td>邮箱</td>
			<td><input type="text" name="email" value="<?php echo $res['email']?>"></td>
		</tr>
		<tr>
			<td>邮编</td>
			<td><input type="text" name="code" value="<?php echo $res['code']?>"></td>
		</tr>
		<tr>
			<td>坐标</td>
			<td><input type="text" name="coor" value="<?php echo $res['coor']?>"></td>
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
			<td><button class="btn btn-lg btn-success"><i class="icon-ok"></i>修改</button></td>
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
        minFrameHeight: 580,//最小高度
        initialFrameWidth:460
    });
    editor.render('Content');
</script>
<?php ActiveForm::end(); ?>
</body>

</div>
</html>