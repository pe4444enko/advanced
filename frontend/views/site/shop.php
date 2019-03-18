<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php
    foreach ($model as $key => $product){
        ?>
        <?= Html::beginTag("div", ['class'=>'card', 'style'=>'width:18rem;'])?>
            <?= Html::beginTag("div",['class'=>'card-body']);?>
                <?= Html::tag('img', '', ['class'=>'card-img-top', 'style'=>'width:18rem;', 'src'=> $product->imageUrl]);?>  
                <?= Html::tag('h5', $product->name, ['class'=>'card-title']);?>
                <?= Html::tag('p', $product->description, ['class'=>'card-text']);?>
                <?= Html::tag('p', $product->price, ['class'=>'card-text']);?>
                <?= Html::tag('button', 'buy', ['class'=>'btn btn-success btn-block', 'onclick'=>'addToBasket('.$product->id.')']);?>

            <?=Html::endTag("div");?>
        <?= Html::endTag("div");?>
        <?php
    }
?>

<script>
    function addToBasket(id) {
        let exp = new Date();
        exp.setDate(exp.getDate() + 30);
        document.cookie = `product=${id}; expires=${exp.toUTCString()}; path=/`;
    }
</script>
