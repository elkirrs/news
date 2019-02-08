<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\userselection */

$this->title = 'Update Userselection: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Userselections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userselection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
