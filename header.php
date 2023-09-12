<?php include_once('../init.php'); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv=»X-UA-Compatible» content=»IE=EmulateIE6″>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Usg15f4z8a8toBkGdJQ9HuIhCGeFjTdURvRxJ4dJILU">
    <meta name="yandex-verification" content="ad173a64e4c20704">
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="css/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/icon.png">
    <link rel="shortcut icon" href="img/icon.png">
    <!-- <link rel="icon" href="img/favicon.svg" type="image/svg+xml"> -->
</head>

<body>
    <!-- Menu Collapse -->
    <div class="menu__collapps">
        <nav class="menu menu1 d-none menu-collapse">
            <div class="x menu-open">
                <a href="/" class="logo">
                    <img src="img/logo_green.png" alt="logo">
                </a>
                <img class="clouse" src="img/x.png" alt="">
            </div>
            <ul class="menu__item">
                <li>
                    <a href="/" class="menu__link">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="/mission" class="menu__link">
                        Миссия
                    </a>
                </li>
                <li>
                    <a href="/krugovorot-zhelanij" class="menu__link">
                        Круговорот желаний
                    </a>
                </li>
                <li>
                    <a href="/umnaya-prodlenka" class="menu__link">
                        Умная продленка
                    </a>
                </li>
                <li>
                    <a href="/podgotovka-k-shkole" class="menu__link">
                        Подготовка к школе
                    </a>
                </li>
                <!-- <li class="dropdown">
                    <a href="#" class="menu__link dropbtn">
                        Обучение
                        <i class="fas fa-chevron-down"></i>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="/programm">
                                Программа обучения
                            </a>
                        </li>
                        <li>
                            <a href="/cost">
                                Стоимость обучения
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Наша команда
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="menu__link dropbtn">
                        Родителям
                        <i class="fas fa-chevron-down"></i>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="/documents/dogovor.docx">
                                Договор
                            </a>
                        </li>
                        <li>
                            <a href="/pay">
                                Порядок оплаты
                            </a>
                        </li>
                        <!-- <li>
                            <a href="/conditions">
                                Условия приёма
                            </a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li>
                    <a href="/good" class="menu__link">
                        Добрые дела
                    </a>
                </li> -->
                <li>
                    <a href="/news" class="menu__link">
                        События
                    </a>
                </li>
                <!-- <li>
                    <a href="/cooperation" class="menu__link">
                        Сотрудничество
                    </a>
                </li> -->
                <li>
                    <a href="/camp" class="menu__link">
                        Детский отдых
                    </a>
                </li>
                <!-- <li>
                    <a href="/vacancy" class="menu__link">
                        Вакансии
                    </a>
                </li>
                <li>
                    <a href="documents/to-investors.pdf" class="menu__link">
                        Инвесторам
                    </a>
                </li> -->
            </ul>
            <div class="contacs1">
                <div class="contacs__call">
                    <a href="tel:+375296403474" class="call">
                        <img src="img/phone_whrite.png" alt="call">
                        +375296403474
                    </a>
                </div>
                <div class="contacs__email">
                    <a href="mailto:bybyschoolby@gmail.com" class="call">
                        <img src="img/email_whrite.png" alt="call">
                        byschoolby@gmail.com
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Menu Collapse -->


    <!---Header--->
    <header id="header" class="header">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-9 col-sm-5 col-md-4 col-lg-3">
                        <div class="social-links">
                            <ul class="links">
                                <li class="links__item">
                                    <a href="https://vk.com/novashkolaya" target="_blank" class="links__icon">
                                        <img src="img/vk.png" alt="Иконка">
                                    </a>
                                </li>
                                <li class="links__item">
                                    <a href="https://www.instagram.com/novashkolaya/" target="_blank" class="links__icon">
                                        <img src="img/instagramm.png" alt="Иконка">
                                    </a>
                                </li>
                                <li class="links__item">
                                    <a href="https://www.facebook.com/novashkolaya" target="_blank" class="links__icon">
                                        <img src="img/fasebook.png" alt="Иконка">
                                    </a>
                                </li>
                                <li class="links__item">
                                    <a href="https://t.me/novashkolaya" target="_blank" class="links__icon">
                                        <img src="img/teleg.png" alt="Иконка">
                                    </a>
                                </li>
                                <li class="links__item">
                                    <a href="https://www.youtube.com/channel/UCPB2skoU5pN50DQfkWpmVCQ?view_as=subscriber" class="links__icon" target="_blank">
                                        <img src="img/youtube.png" alt="Иконка">
                                    </a>
                                </li>
                                <!-- <li class="links__item">
                                    <a href="#" class="links__icon">
                                        <img src="img/chat.png" alt="">
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 col-sm-2 col-md-4 d-lg-none">
                        <button class="menu-open">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-sm-5 col-md-4 col-lg-3 ml-auto">
                        <div class="cabinet">
                            <div class="cabinet__lang">
                                <span>
                                    Russian
                                </span>
                                <a href="#">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </div>
                            <!-- <div class="d-sm-none contacs__search-mob">
                                <a href="#" class="call">
                                    <img src="img/search.png" alt="search">
                                </a>
                            </div> -->
                            <div class="cabinet__input">
                                <a href="#" class="input">Вход</a>
                                <span>/</span>
                                <a href="#" class="reg">Регистрация</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12">
                    <a href="/" class="logo">
                        <img src="img/logo_green.png" alt="logo">
                    </a>
                </div>
                <div class="col-lg-12 col-xl-10">
                    <div class="navigation">
                        <div class="contacs">
                            <!-- <div class="contacs__search">
                                <a href="#" class="call">
                                    <img src="img/search.png" alt="search">
                                </a>
                            </div> -->
                            <div class="contacs__call">
                                <a href="tel:+375296403474" class="call">
                                    <img src="img/call.png" alt="call">
                                    +375296403474
                                </a>
                            </div>
                            <div class="contacs__email">
                                <a href="mailto:bybyschoolby@gmail.com" class="call">
                                    <img src="img/message.png" alt="call">
                                    byschoolby@gmail.com
                                </a>
                            </div>
                        </div>
                        <nav class="menu d-none d-lg-block">
                            <ul class="menu__item">
                                <li>
                                    <a href="/mission" class="menu__link">
                                        Миссия
                                    </a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="menu__link dropbtn">
                                        Обучение
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="/programm">
                                                Программа обучения
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/cost">
                                                Стоимость обучения
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Наша команда
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a href="/krugovorot-zhelanij" class="menu__link">
                                        Круговорот желаний
                                    </a>
                                </li>
                                <li>
                                    <a href="/umnaya-prodlenka" class="menu__link">
                                        Умная продленка
                                    </a>
                                </li>
                                <li>
                                    <a href="/podgotovka-k-shkole" class="menu__link">
                                        Подготовка к школе
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="menu__link dropbtn">
                                        Родителям
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="/documents/dogovor.docx">
                                                Договор
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/pay">
                                                Порядок оплаты
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="/conditions">
                                                Условия приёма
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="/good" class="menu__link">
                                        Добрые дела
                                    </a>
                                </li> -->
                                <li>
                                    <a href="/news" class="menu__link">
                                        События
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="/cooperation" class="menu__link">
                                        Сотрудничество
                                    </a>
                                </li> -->
                                <li>
                                    <a href="/camp" class="menu__link">
                                        Детский отдых
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!---End Header--->