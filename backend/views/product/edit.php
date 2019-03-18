
<?php
use yii\helpers\Html;
use yii\helpers\Url;


?>
        <?= Html::beginTag("div", ['class'=>'card', 'style'=>'width:18rem;'])?>
            <?= Html::tag('img', '', ['class'=>'card-img-top', 'src'=>$model->imageUrl]);?>
            <?= Html::beginTag("div",['class'=>'card-body']);?>
                <?= Html::tag('h5', $model->name, ['class'=>'card-title']);?>
                <?= Html::tag('p', $model->description, ['class'=>'card-text']);?>
            <?=Html::endTag("div");?>
        <?= Html::endTag("div");?>
<?= Html::tag('a','Delete', ['class'=>'btn btn-block btn-danger', 
    'href'=>Url::toRoute(['product/delete', 'id'=>$model->id])
])?>