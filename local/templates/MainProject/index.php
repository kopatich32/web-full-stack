<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGAFILMS</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="assets/icons/logo.svg" type="image/x-icon">

    <script src="scripts/register-login.js" defer></script>
    <script src="scripts/telMask.js" defer></script>
    <script src="scripts/more.js" defer></script>
    <script src="scripts/scroll.js" defer></script>
    <script src="scripts/header.js" defer></script>
</head>

<body>

<section class="hero">
    <div class="hero__header header">
        <div class="header__inner">
            <a class="header__logo logo" href="/">
                <img src="assets/icons/logo.svg" alt="" class="logo__img">
                <span class="logo__title">MEGAFILM </span>
            </a>
            <nav class="header__nav">
                <a href="views/films/index.php" class="header__nav-link">Фильмы</a>
                <a href="views/series/index.php" class="header__nav-link">Сериалы</a>
                <a href="views/music/index.php" class="header__nav-link">Клипы</a>
                <a href="views/sport/index.php" class="header__nav-link">Спорт</a>
            </nav>
            <div class="header__menu">
                    <form action="views/accaunt/index.php">
                        <button type="submit" class="header__accaunt-btn"><img  alt=" " src=""
                                                                               class="header__accaunt-img "
                                                                               id="accauntBtn"></button>
                    </form>
                    <button class="header__accaunt-btn"><img src="/assets/icons/Profile.svg" alt=""
                                                             class="header__accaunt-img " id="accauntBtn"></button>
            </div>
        </div>
    </div>
    <video class="hero__background" autoplay muted loop playsinline>
        <source src="" type="video/mp4">
        <h1>Увы рекламное видео не загрузилось</h1>
    </video>
    <div class="hero__more">
        <button class="hero__more-btn button" id="moreBtn"> Подробнее</button>
    </div>
    <div class="hero__more-window">
        <button class="hero__more-window-close"><img src="assets/icons/Close.svg" alt=""
                                                     class="hero__more-window-close-img"></button>
        <div class="hero__slider">
            <button class="hero__slider-left-btn"><img src="assets/icons/next.svg"
                                                       alt="Преведущий слайд" class="hero__slider-btn-img"></button>
            <div class="hero__slides">
                    <div class="hero__slide">
                        <h2 class="hero__slide-title ">></h2>
                            <video class="hero__slide-video" autoplay muted loop playsinline>
                                <source src="" type="video/mp4">
                                <h1>Увы рекламное видео не загрузилось</h1>
                            </video>
                        <p class="hero__slide-text">></p>
                            <form method="post" action="">
                                <button name="filmFakeLink" type="submit" class="button hero__slide-link"
                                        value="">
                                    Перейти
                                </button>
                            </form
                    </div>
            </div>
            <button class="hero__slider-right-btn"><img src="assets/icons/next.svg"
                                                        alt="Следующий слайд" class="hero__slider-btn-img"></button>
            <div class="hero__slider-pagination">
            </div>
        </div>
    </div>
</section>

<section class="fresh-hits" >
    <div class="fresh-hits__inner">
        <div class="fresh-hits__content">
            <h1 class="fresh-hits__title"></h1>
            <p class="fresh-hits__text"></p>
        </div>
            <div class="fresh-hits__list">
                    <form action="views/films/video.php" method="post" class="fresh-hits__link">
                        <button type="submit" style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                                value="" name="filmFakeLink">
                            <img src="" alt="" class="fresh-hits__item">
                        </button>
                    </form>
                <form action="views/series/video.php" class="fresh-hits__link" method="post">
                    <button style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                            type="submit" value="" name="filmFakeLink">
                        <img src="" alt="" class="fresh-hits__item">
                    </button>
                </form>
                <form action="views/sport/video.php" method="post" class="fresh-hits__link">
                    <button style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                            type="submit" value="" name="filmFakeLink">
                        <img src="" alt="" class="fresh-hits__item">
                    </button>
                </form>
                    <form action="views/music/video.php" class="fresh-hits__link" method="post">
                        <button style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                                type="submit" value="" name="filmFakeLink">
                            <img src="" alt="" class="fresh-hits__item">
                        </button>
                    </form>
            </div>
        </div>
    </section>
<nav class="menu">
    <a class="menu__item" href="views/films/index.php"><img src="assets/icons/film.svg" alt="Фильмы"
                                                 class="menu__item-img">
        <h2 class="menu__item-title h1">Фильмы</h2>
    </a>
    <a class="menu__item" href="views/series/index.php"><img src="assets/icons/Serial.svg" alt="Сериалы"
                                                   class="menu__item-img">
        <h2 class="menu__item-title h1">Сериалы</h2>
    </a>
    <a class="menu__item" href="views/music/index.php"><img src="assets/icons/Music.svg" alt="Клипы" class="menu__item-img">
        <h2 class="menu__item-title h1">Клипы</h2>
    </a>
    <a class="menu__item" href="views/sport/index.php"><img src="assets/icons/sport.svg" alt="Спорт" class="menu__item-img">
        <h2 class="menu__item-title h1">Спорт</h2>
    </a>
</nav>

