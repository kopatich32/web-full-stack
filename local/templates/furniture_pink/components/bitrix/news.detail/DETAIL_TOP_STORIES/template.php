<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="ts">
    <h2><?=$arResult['NAME']?></h2>
    <svg id="line" width="1170" height="1" viewBox="0 0 1170 1" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="1170" height="1" fill="#4A4848"/>
    </svg>
    <p>6 hours ago / by <?=$arResult['CREATED_USER_NAME']?></p>
    <?if($arResult["DISPLAY_PROPERTIES"]["DETAIL_PICTURES"]["FILE_VALUE"]){?>
        <?foreach ($arResult["DISPLAY_PROPERTIES"]["DETAIL_PICTURES"]["FILE_VALUE"] as $arItem){?>
            <img src="<?= $arItem['SRC'] ?>" alt="">
            <p><?= $arItem['DESCRIPTION'] ?></p>
        <?}?>
    <?}?>
    <p>6 hours ago / by <?=$arResult['CREATED_USER_NAME']?></p>
</section>
<section class="back">
	<div id="back"><a href="<?=SITE_DIR?>">Back</a></div>
</section>