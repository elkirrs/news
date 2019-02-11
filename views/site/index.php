<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'News Blog';
?>

<div class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">

                    <?php foreach ($news as $new):?>
                    <div class="blog-post">
                        <div class="col-md-12">
                            <img src=" <?= $new->getImage();?>"  width="100%" height="400" alt="">
                            <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary"><?= $new->category->nameCategory;?></strong>
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="<?= Url::toRoute(['site/single', 'id' => $new->id]);?>"><?= $new->nameNews;?></a>
                                    </h5>
                                    <div class="mb-1 text-muted"><?= $new->dateNews ?></div>
                                    <p class="card-text mb-auto"><?= $new->annotatio;?></p>
                                    <a href="<?= Url::toRoute(['site/single', 'id' => $new->id]);?>">Подробнее</a>
                                </div>

                            </div>
                        </div>
                </div><!-- /.blog-post -->
                    <?php endforeach; ?>


                        <?php echo LinkPager::widget([
                            'pagination' => $pages,
                        ])?>



            </div>
            <?=
            $this->render('/partials/sidebar',[
                'categories' => $categories,
            ]);?>
        </div><!-- /.row -->
    </main><!-- /.container -->
</div>