<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
<?php
foreach ($model['discounts'] as $key => $discounts)
{
    if($key === 0)
    {
        ?>
   
    <div class="carousel-item active">
      <a href="<?= Url::toRoute(['discounts/view', 'id'=>$discounts->productsID])?>"><img class="d-block" style="width: 750px; height: 500px;" src="<?= $discounts->imageUrl  ?>" alt="First slide"></a>
    </div>
<?php
    }
    else 
    {
        ?>
   
    <div class="carousel-item">
      <a href="<?= Url::toRoute(['discounts/view', 'id'=>$discounts->productsID])?>"><img class="d-block" style="width: 750px; height: 300px;" src="<?= $discounts->imageUrl  ?>" alt="First slide"></a>
    </div>
<?php
    }
}
?>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
    foreach ($model['news'] as $key => $news){
        ?>
        <?= Html::beginTag("div", ['class'=>'card', 'style'=>'width:18rem;'])?>
            <?= Html::beginTag("div",['class'=>'card-body']);?>
                <?= Html::tag('h5', $news->id, ['class'=>'card-title']);?>
                <?= Html::tag('p', $news->title, ['class'=>'card-text']);?>
                <?= Html::tag('p', $news->content, ['class'=>'card-text']);?>
            <?=Html::endTag("div");?>
        <?= Html::endTag("div");?>
        <?php
    }
?>

