<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\chatonline */

$this->title = $model->idChatOnline;
$this->params['breadcrumbs'][] = ['label' => 'Chatonlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chatonline-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idChatOnline], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idChatOnline], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idChatOnline',
            'dateMessage',
            'idUsers',
        ],
    ]) ?>

</div>
