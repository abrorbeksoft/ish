<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<div class="span9">
    <div>
        <?php $form=ActiveForm::begin([ 'id'=>'create-product', 'options' =>['style'=>'margin-left:auto; width:40%; margin-right:auto','enctype' => 'multipart/form-data']])  ?>
        <?= $form->field($model,'name')->textInput(['style'=>'width:100%']) ?>
        <?= $form->field($model,'price')->input('number',['style'=>'width:100%']) ?>
        <?= $form->field($model,'image1')->fileInput(['style'=>'width:100%'])->label('Firt image') ?>
        <?= $form->field($model,'text')->textarea(['style'=>'width:100%']) ?>
        <?= $form->field($model,'category')->dropDownList($category) ?>
        <div class="form-group">
            <?= \yii\helpers\Html::submitButton('create',['class'=>'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>


