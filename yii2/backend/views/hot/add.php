<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HotModel */
/* @var $form ActiveForm */
?>

<div class="add" style="length:100px;">

    <?php $form = ActiveForm::begin(); ?>

    
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('添加热词', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- add -->
