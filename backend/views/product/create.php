<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin (['method' => 'post', 'options' => ['enctype' => 'multipart/form-data']]);

?>
<?= $form->field($model, 'imageFile')->fileInput() ?>

<?= $form->field($model, 'name') ->textInput() ?>

<?= $form->field($model, 'price') ->textInput(['type' => 'number'])?>

<?= $form->field($model, 'description') ->textInput()?>

    <div class="form-group">
            <?= Html::submitButton('Create', ['class' => 'btn btn-primary btn-block']) ?>
    </div>

<?php ActiveForm::end() ?>

