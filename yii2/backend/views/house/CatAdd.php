<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="well">
<table calss="table">
<?php
//简单的表单使用自带的表单
$form =ActiveForm::begin([
        'action'=>Url::toRoute(['cat-add']),
    'method'=>'post',
   
]);
echo $form ->field($model,'cat_name');
echo $form ->field($model,'cat_desc');
echo $form ->field($model,'sort');
 echo $form->field($model, 'is_nav')->radioList(['1'=>'在导航栏展示','0'=>'否']);
 echo $form->field($model, 'is_show')->radioList(['1'=>'在前台显示','0'=>'否']);
echo Html::submitButton();
ActiveForm::end();
?>
</table>
</div>