<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Discounts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discounts-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= Html::beginTag('select', ['class'=>'form-control', 'name'=>'DiscountForm[productsID]'])?>
        <?php
            foreach($model['products'] as $number => $product)
            {
                echo Html::tag('option', $product->name, ['value'=>$product->id]);
            }
        ?>
    <?= Html::endTag('select')?>

    <?= $form->field($model['form'], 'imageFile')->fileInput() ?>
    
    <?= $form->field($model['form'], 'title')->textInput(['maxlength' => 8]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
