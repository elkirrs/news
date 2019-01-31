<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\chatonline */

$this->title = 'Update Chatonline: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Chatonlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idChatOnline, 'url' => ['view', 'id' => $model->idChatOnline]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chatonline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
