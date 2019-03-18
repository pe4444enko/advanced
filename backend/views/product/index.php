<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<?= Html::tag('a', 'Create New', ['class' => 'btn btn-success', 'href' => Url::toRoute('/product/create')]) ?>
<?php

?>
<?php
    foreach ($model as $key => $product){
        ?>
        <?= Html::beginTag("div", ['class'=>'card', 'style'=>'width:18rem;'])?>
            <?= Html::tag('img', '', ['class'=>'card-img-top', 'src'=> $product->imageUrl]);?>
            <?= Html::beginTag("div",['class'=>'card-body']);?>
                <?= Html::tag('h5', $product->name, ['class'=>'card-title']);?>
                <?= Html::tag('p', $product->description, ['class'=>'card-text']);?>
                <?= Html::tag('a','Edit', ['class'=>'btn btn-block btn-warning', 
                'href'=>Url::toRoute(['product/edit', 'id'=>$product->id])
                ])?>
            <?=Html::endTag("div");?>
        <?= Html::endTag("div");?>
        <?php
    }
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>