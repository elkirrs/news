<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\commentsnews */

$this->title = 'Create Commentsnews';
$this->params['breadcrumbs'][] = ['label' => 'Commentsnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentsnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
