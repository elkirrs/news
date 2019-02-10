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
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="assept/img/fivicon.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Авторизация пользователя</h1>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
</form>
<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
</body>
</html>