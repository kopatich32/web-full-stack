<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>
<? $asset=Asset::getInstance()?>


<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $asset->addCss(SITE_TEMPLATE_PATH.'/assets/css/main.css');
    $asset->addCss(SITE_TEMPLATE_PATH.'/assets/css/main.css');
    $asset->addJs(SITE_TEMPLATE_PATH.'/assets/slidingmenu.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/assets/script.js');
    $asset->addString('<link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap">')
    ?>


    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>

    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>

<header class="header">
    <div class="logoholder">
        <a href="#">
            <img class="hamburger" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/Hamburger_icon1.png?" alt="Menu">
        </a>
        <a href="/index.php">
            <div class="mains">NEWS</div>
        </a>
    </div>


    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "News-Nav",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
        )
    );?>
    <div class="rightpanel">
        <input id="mobsearch" class="rpl" type="text" placeholder="Search">
        <svg class="rpl" width="51" height="44" viewBox="0 0 51 44" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M12.75 0C9.24375 0 6.12 1.46625 3.76125 3.76125C1.46625 6.05625 0 9.18 0 12.75C0 16.2563 1.46625 19.38 3.76125 21.7388L25.5 43.4775L47.2388 21.7388C49.5337 19.4438 51 16.32 51 12.75C51 9.24375 49.5337 6.12 47.2388 3.76125C44.9437 1.46625 41.82 0 38.25 0C34.7438 0 31.62 1.46625 29.2613 3.76125C26.9663 6.05625 25.5 9.18 25.5 12.75C25.5 9.24375 24.0338 6.12 21.7388 3.76125C19.4438 1.46625 16.32 0 12.75 0Z"
                  fill="black"/>
        </svg>
        <?if(!$USER->IsAuthorized()){?>
			<a href="/registr.php">
				<svg class="rpl" width="52" height="46" viewBox="0 0 52 46" fill="none"
					 xmlns="http://www.w3.org/2000/svg">
					<path d="M19.307 0V6.43568H45.0497V38.6141H19.307V45.0497H51.4854V0H19.307ZM25.7427 12.8714V19.307H0V25.7427H25.7427V32.1784L38.6141 22.5249L25.7427 12.8714Z"
						  fill="black"/>
				</svg>
			</a>
		<? } ?>
    </div>
</header>



<!-- Sliding Left Menu -->
<div class="slide-menu hidden">
    <div class="slide-menu__content">
        <button class="btn--close-slide-menu">×</button>
        <nav class="slide-nav">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"mobile",
				Array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "mobile",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(0=>"",),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "mobile",
					"USE_EXT" => "Y"
				)
			);?>
        </nav>
    </div>
</div>

<!-- Overlay for blur -->
<div class="slide-overlay hidden"></div>

<main>
