<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\commentsnews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commentsnews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'textComments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateComments')->textInput() ?>

    <?= $form->field($model, 'news_id')->textInput() ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
