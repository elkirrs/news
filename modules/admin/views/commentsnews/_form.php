<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\commentsnews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commentsnews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dateComments')->textInput() ?>

    <?= $form->field($model, 'idUsers')->textInput() ?>

    <?= $form->field($model, 'idNews')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
