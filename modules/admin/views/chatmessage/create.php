<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\chatmessage */

$this->title = 'Create Chatmessage';
$this->params['breadcrumbs'][] = ['label' => 'Chatmessages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chatmessage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
