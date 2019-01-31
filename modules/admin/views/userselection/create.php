<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\userselection */

$this->title = 'Create Userselection';
$this->params['breadcrumbs'][] = ['label' => 'Userselections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userselection-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
