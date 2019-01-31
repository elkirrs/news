<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\chatmessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chatmessage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'textMessage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idChatOnline')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
