<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\commentstext */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commentstext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'commentsText')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCommentsNews')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
