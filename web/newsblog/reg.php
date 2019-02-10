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
<main class="container mt-5">
    <div class="row">
        <div class="col-md-5 mb-3">
            <h4>Форма регистрации</h4>
            <form action="" method="post">
                <label for="username">Имя</label>
                <input type="text" id="username" class="form-control">

                <label for="username">Фамилия</label>
                <input type="text" id="surname" class="form-control">

                <label for="username">Отчество</label>
                <input type="text" id="middlename" class="form-control">

                <label for="username">Логин</label>
                <input type="text" id="nickname" class="form-control">

                <label for="username">Электронная почта</label>
                <input type="text" id="email" class="form-control">

                <label for="username">Пароль</label>
                <input type="password" id="password" class="form-control">

                <button type="submit" class="btn btn-success mt-5">
                    Зарегистрироваться
                </button>
            </form>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
</body>
</html>