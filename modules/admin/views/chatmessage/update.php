<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\chatmessage */

$this->title = 'Update Chatmessage: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Chatmessages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idChatMessage, 'url' => ['view', 'id' => $model->idChatMessage]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chatmessage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
