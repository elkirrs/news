<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\commentsnewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commentsnews-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCommentsNews') ?>

    <?= $form->field($model, 'dateComments') ?>

    <?= $form->field($model, 'idUsers') ?>

    <?= $form->field($model, 'idNews') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
