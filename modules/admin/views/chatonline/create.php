<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\chatonline */

$this->title = 'Create Chatonline';
$this->params['breadcrumbs'][] = ['label' => 'Chatonlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chatonline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
