<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\chatonline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chatonline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'textMessage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateMessage')->textInput() ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
