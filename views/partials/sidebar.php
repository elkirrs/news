<?php use yii\helpers\Url;?>

<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Категории</h4>
        <ul>


            <?php foreach ($categories as $category):?>
                <li>
                    <a href="<?= Url::toRoute(['site/category', 'id' => $category->id]);?>"><?=$category->nameCategory ;?></a>
                    <span class="post-count pull-right"> (<?= $category->getNewsCount();?>)</span>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</aside><!-- /.blog-sidebar -->