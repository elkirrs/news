<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\news */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameNews')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annotatio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contentNews')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'files')->textInput() ?>

    <?= $form->field($model, 'dateNews')->textInput() ?>

    <?= $form->field($model, 'cat_idCategory')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
