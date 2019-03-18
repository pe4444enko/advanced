<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Shop';
echo Html::beginTag('div', ['class' => 'd-flex']);
foreach ($model as $key => $product) {
    ?>
    <?= Html::beginTag('div', ['class' => 'card m-3', 'style' => 'width:18rem;']) ?>

        <?= Html::tag('img', '' , ['class' => 'card-img-top', 'src' => $product->imageUrl]); ?>
        <?= Html::beginTag('div', [ 'class' => 'card-body']); ?>
            <?= Html::tag('h5', $product->name, [ 'class' => 'card-title']); ?>
            <?= Html::tag('p', $product->description, [ 'class' => 'card-text']); ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div'); ?>
    <?php
}
echo Html::endTag('div');