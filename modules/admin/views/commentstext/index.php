<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\commentstextSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commentstexts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentstext-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Commentstext', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCommentsText',
            'commentsText',
            'idCommentsNews',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
