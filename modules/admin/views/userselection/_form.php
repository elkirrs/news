<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userselection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userselection-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idUsers')->textInput() ?>

    <?= $form->field($model, 'idCategory')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
