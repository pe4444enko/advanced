<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\Orders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?=  $model->user->email; ?>
    <?php
    foreach ($model->ordersitems as $key => $item){
        ?>
        <?= Html::beginTag("div", ['class'=>'card', 'style'=>'width:18rem;'])?>
            <?= Html::beginTag("div",['class'=>'card-body']);?>
                <?= Html::tag('h5', $item->id, ['class'=>'card-title']);?>
                <?= Html::tag('h5', $item->productID, ['class'=>'card-title']);?>
                <?= Html::tag('h5', $item->ordersID, ['class'=>'card-title']);?>
                <?= Html::tag('h5', $item->count, ['class'=>'card-title']);?>
                <?= Html::tag('h5', $item->price, ['class'=>'card-title']);?>
                <?= Html::tag('img', '', ['class'=>'card-img-top', 'src'=> $item->product->imageUrl]);?>
            <?=Html::endTag("div");?>
        <?= Html::endTag("div");?>
        <?php
    }
?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'userID',
            'date',
            'status',
        ],
    ]) ?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>