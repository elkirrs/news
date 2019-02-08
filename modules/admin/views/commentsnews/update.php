<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\commentsnews */

$this->title = 'Update Commentsnews: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Commentsnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="commentsnews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
