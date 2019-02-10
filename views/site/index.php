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
                            <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary"><?= $new->category->nameCategory;?></strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="<?= Url::toRoute(['site/single', 'id' => $new->id]);?>"><?= $new->nameNews;?></a>
                                    </h3>
                                    <div class="mb-1 text-muted"><?= $new->dateNews ?></div>
                                    <p class="card-text mb-auto"><?= $new->annotatio;?></p>
                                    <a href="<?= Url::toRoute(['site/single', 'id' => $new->id]);?>">Подробнее</a>
                                </div>
                                <img src=" <?= $new->getImage();?>"  width="290" height="250" alt="">
                            </div>
                        </div>
                </div><!-- /.blog-post -->
                    <?php endforeach; ?>


                        <?php echo LinkPager::widget([
                            'pagination' => $pages,
                        ])?>



            </div>
            <aside class="col-md-3 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Категории</h4>
                    <ul>
                        <?php foreach ($categories as $category):?>
                        <li>
                            <a href="#"><?=$category->nameCategory ;?></a>
                            <span class="post-count pull-right"> (<?= $category->getNews()->count();?>)</span>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
</div>