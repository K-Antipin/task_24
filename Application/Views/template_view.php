<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/img/icon/fav.png">
    <title><?= isset($_GET['url']) ? ucfirst($_GET['url']) : 'Главная' ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Marko+One&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/img/mvc.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    MVC Pattern
                </a>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link <?= !isset($_GET['url']) ? 'active_tab' : '' ?>" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['url']) && $_GET['url'] === 'about' ? 'active_tab' : '' ?>" href="/about">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['url']) && $_GET['url'] === 'contacts' ? 'active_tab' : '' ?>" href="/contacts">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['url']) && $_GET['url'] === 'portfolio' ? 'active_tab' : '' ?>" href="/portfolio">Портфолио</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>