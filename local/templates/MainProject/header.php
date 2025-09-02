<?php

namespace Bitrix\Main;

use Bitrix\Main\Page\Asset,
    Bitrix\Main\Localization\Loc;

$asset = Asset::getInstance();

/* @var $APPLICATION */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">
    <?php
    $APPLICATION->ShowHead();
    $asset->addCss(SITE_TEMPLATE_PATH . '/styles/style.css');

    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/register-login.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/filter.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/header.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/more.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/scroll.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/telMask.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/scripts/video.js');
    ?>
</head>
<? $APPLICATION->ShowPanel() ?>
<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo logo" href="/">
            <img src=" <?=SITE_TEMPLATE_PATH . '/assets/icons/logo.svg'?>" alt="" class="logo__img">
            <span class="logo__title">MEGAFILM </span>
        </a>
        <nav class="header__nav">
            <a href="<?=SITE_TEMPLATE_PATH . '/views/films/index.php' ?>" class="header__nav-link">Фильмы</a>
            <a href="<?=SITE_TEMPLATE_PATH . '/views/series/index.php'?>" class="header__nav-link">Сериалы</a>
            <a href="<?=SITE_TEMPLATE_PATH . '/views/music/index.php'?>" class="header__nav-link">Клипы</a>
            <a href="<?=SITE_TEMPLATE_PATH . '/views/sport/index.php'?>'" class="header__nav-link">Спорт</a>
        </nav>
        <div class="header__menu">

                <form action="<?=SITE_TEMPLATE_PATH . '/views/accaunt/index.php'?>">
                    <button class="header__accaunt-btn">
                        <img src="<?=SITE_TEMPLATE_PATH . '/assets/icons/Profile.svg'?>" alt="" class="header__accaunt-img " id="accauntBtn">
                    </button>
                </form>

        </div>
    </div>
</header>






