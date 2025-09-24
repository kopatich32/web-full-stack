<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;
use Bitrix\Main\Page\Asset,
    Bitrix\Main\Localization\Loc;
$asset = Asset::getInstance();
global $APPLICATION;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?
    $APPLICATION->ShowHead();
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/reset.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');

    $asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
    ?>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
</head>
<body>
<?$APPLICATION->ShowPanel()?>
<div class="wrap">
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <?if(date('H') >= 9 && date('H') <= 18){?>
                <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                <?}else{?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                <? } ?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <nav class="menu-block">
                    <ul>
                        <li class="att popup-wrap">
                            <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                            <form action="/" class="frm-login popup-block">
                                <div class="frm-title">Войти на сайт</div>
                                <a href="" class="btn-close">Закрыть</a>
                                <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                <div class="frm-row">
                                    <div class="frm-chk">
                                        <input type="checkbox" id="login">
                                        <label for="login">Запомнить меня</label>
                                    </div>
                                </div>
                                <div class="frm-row"><input type="submit" value="Войти"></div>
                            </form>
                        </li>
                        <li><a href="">Зарегистрироваться</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "4",	// Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
            0 => "",
        ),
        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
    ),
        false
    );?>
    <?if(!CSite::InDir('/index.php')){?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumbs",
            array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0",
                "COMPONENT_TEMPLATE" => "breadcrumbs"
            ),
            false
        );
        ?>
    <? } ?>
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <?if(!CSite::InDir('/index.php')){?>
                    <header>
                        <h1><?$APPLICATION->ShowTitle(false)?></h1>
                    </header>
                    <? } ?>
