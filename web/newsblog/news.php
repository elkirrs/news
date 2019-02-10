<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assept/css/bootstrap.min.css">
    <link rel="icon" href="assept/img/fivicon.png">
    <link rel="stylesheet" href="assept/css/main.css">
    <title>News</title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h3 class="my-0 mr-md-auto font-weight-normal">News Blog</h3>
    <nav class="my-md-0 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Новости</a>
        <a class="p-2 text-dark" href="#">Категории</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
        <a class="p-2 text-dark" href="#">О нас</a>
    </nav>

    <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-5" type="submit">Search</button>
    </form>
    <a class="btn btn-outline-primary mr-1"  href="auth.php">Войти</a>
    <a class="btn btn-outline-primary" href="reg.php">Регистрация</a>
</div>

<div class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="blog-post">
                    <div class="col-md-12">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="card-title">Новость PHP</h5>
                                <p class="card-text"> Большинство разработчиков объектно-ориентированных приложений используют такое соглашение именования файлов, в котором каждый класс хранится в отдельно созданном для него файле. Одна из самых больших неприятностей - необходимость писать в начале каждого скрипта длинный список подгружаемых файлов (по одному для каждого класса).

                                    В PHP 5 это делать необязательно. Функция spl_autoload_register() позволяет зарегистрировать необходимое количество автозагрузчиков для автоматической загрузки классов и интерфейсов, если они в настоящее время не определены. Регистрируя автозагрузчики, PHP получает последний шанс для интерпретатора загрузить класс прежде, чем он закончит выполнение скрипта с ошибкой.
                                    Подсказка

                                    В то время как функция __autoload() также может быть использована для автоматической загрузки классов и интерфейсов, следует отдать предпочтение spl_autoload_register(), потому, что она предоставляет гораздо более гибкую альтернативу, позволяя регистрировать необходимое количество автозагрузчиков, например, для сторонних библиотек. По этой причине использование __autoload() не рекомендуется и в будущем может быть объявлено устаревшим.
                                </p>
                                <a href="index.php" class="btn btn-primary btn-sm">Вернуться назад</a>
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
<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
</body>
</html>

