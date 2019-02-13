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
                                <img src=" <?= $news->getImage();?>"  width="100%" height="100%" alt="">
                                <p class="card-text"><?= $news->contentNews;?></p>
                                <a href="<?= Url::toRoute(['/']);?>" class="btn btn-primary btn-sm">Вернуться назад</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.blog-post -->





                <div class="bottom-comment"><!--bottom comment-->
                    <h5>Коментарии: </h5>

                    <?php if (!empty($comments)): ?>
                    <?php foreach ($comments as $comment): ?>
                    <div class="alert alert-success" role="alert">

                        <p class="comment-date">
                            <em><b><?= $comment->user->nickname; ?></b></em>
                            <?= $comment->dateComments; ?>
                        </p>

                        <p class="para"><?= $comment->textComments; ?></p>
                    </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <!-- end bottom comment-->


<?= $this->render('/partials/comment', [
        'news' => $news,
        'comments' => $comments,
        'commentsForm' => $commentsForm,
]);?>

            </div><!-- /.blog-main -->
                <?= $this->render('/partials/sidebar',[
                    'categories' => $categories,
                ]);?>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
</div>