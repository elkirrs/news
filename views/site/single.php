<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'НОвость';
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
                <div class="blog-post">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Коментарии:</h6>
                            </div>
                            <div class="card-body">
                                <p><b>Login</b></p>
                                <p>Текст комментария </p>
                                <p><b>Login</b></p>
                                <p>Текст комментария Текст комментария Текст комментария Текст комментария Текст комментария Текст комментария</p>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Введите текст комментария</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
</div>