<?php


use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Новость';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="blog-post">
                    <div class="col-md-12">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="card-title"><?= $news->nameNews;?></h5>
                                <img src=" <?= $news->getImage();?>"  width="100%">
                                <p class="card-text"><?= $news->contentNews;?></p>
                                <a href="<?= Url::toRoute(['/']);?>" class="btn btn-primary btn-sm">Вернуться назад</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.blog-post -->





                <div class="bottom-comment"><!--bottom comment-->
                    <h5>Коментарии: </h5>

                    <?php if (!empty($commentsnews)): ?>
                    <?php foreach ($commentsnews as $commentnews): ?>
                    <div class="alert alert-success" role="alert">

                        <p class="comment-date">
                            <em><b><?= $commentnews->user->nickname; ?></b></em>
                            <?= $commentnews->getDate(); ?>
                        </p>

                        <p class="para"><?= $commentnews->textComments; ?></p>
                    </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <!-- end bottom comment-->



<?= $this->render('/partials/comment', [
        'news' => $news,
        'commentsnews' => $commentsnews,
        'commentForm' => $commentForm,
]);?>

            </div><!-- /.blog-main -->
                <?= $this->render('/partials/sidebar',[
                    'categories' => $categories,
                ]);?>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
</div>