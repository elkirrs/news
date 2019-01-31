<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\commentstext */

$this->title = 'Create Commentstext';
$this->params['breadcrumbs'][] = ['label' => 'Commentstexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentstext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
