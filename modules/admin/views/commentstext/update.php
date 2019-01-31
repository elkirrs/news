<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\commentstext */

$this->title = 'Update Commentstext: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Commentstexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCommentsText, 'url' => ['view', 'id' => $model->idCommentsText]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="commentstext-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
