<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    foreach ($model as $key => $orders){
        ?>
        <?= Html::beginTag("div", ['class'=>'card', 'style'=>'width:18rem;'])?>
            <?= Html::beginTag("div",['class'=>'card-body']);?>
                <?= Html::tag('h5', $orders->userID, ['class'=>'card-title']);?>
                <?= Html::tag('p', $orders->date, ['class'=>'card-text']);?>
                <?= Html::tag('p', $orders->status, ['class'=>'card-text']);?>

                <?= Html::tag('a','Edit', ['class'=>'btn btn-block btn-warning', 
                'href'=>Url::toRoute(['orders/view', 'id'=>$orders->id])
                ])?>
            <?=Html::endTag("div");?>
        <?= Html::endTag("div");?>
        <?php
    }
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>