<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\commentsnewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commentsnews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commentsnews-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Commentsnews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCommentsNews',
            'dateComments',
            'idUsers',
            'idNews',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
