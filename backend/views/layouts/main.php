<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?=Yii::$app->homeUrl;?>"><?= Yii::$app->name;?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <?= Html::tag("a", "Products", ['class'=>'nav-link', 'href'=>Url::toRoute(['/product/index']) ]); ?>
                </li>
                <li class="nav-item">
                    <?= Html::tag("a", "Discounts", ['class'=>'nav-link', 'href'=>Url::toRoute(['/discounts/index']) ]); ?>
                </li>
                <li class="nav-item">
                    <?= Html::tag("a", "Orders", ['class'=>'nav-link', 'href'=>Url::toRoute(['/orders/index']) ]); ?>
                </li>
                <li class="nav-item">
                    <?= Html::tag("a", "ProductsCategory", ['class'=>'nav-link', 'href'=>Url::toRoute(['/category/index']) ]); ?>
                </li>
                <li class="nav-item">
                    <?= Html::tag("a", "News", ['class'=>'nav-link', 'href'=>Url::toRoute(['/news/index']) ]); ?>
                </li>
                <li class="nav-item">
                    <?= Html::tag("a", "Roles", ['class'=>'nav-link', 'href'=>Url::toRoute(['/roles/index']) ]); ?>
                </li>
                <?= Html::beginTag("li", ['class'=>'nav-item'])?>
                <?php
                if (Yii::$app->user->isGuest){
                    echo Html::tag("a", "Login", ['class'=>'nav-link', 'href'=>Url::toRoute(['/site/login']) ]);
                    
                }
                else{?>
                    <?= Html::beginForm(['/site/logout'], 'post')?>
                    <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',['class' => 'btn btn-link logout'] )?>
                    <?= Html::endForm()?>
                <?= Html::endTag('li')?> <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>
