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
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult['DETAIL_TEXT']?>
        </div>
        <div class="review-autor">
            <?=$arResult['NAME']?>, <?=$arResult['DISPLAY_ACTIVE_FROM']?> г.,
            <?=$arResult['DISPLAY_PROPERTIES']['POSITION']['VALUE']?>,
            <?=$arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE']?>.
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap">
        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="img">
    </div>
</div>
<?if($arResult['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']){?>
<div class="exam-review-doc">
    <p>Документы:</p>
    <?foreach ($arResult['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE'] as $key => $value){?>
    <div  class="exam-review-item-doc">
        <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH . '/img/icons/pdf_ico_40.png'?>" alt="">
        <a href="<?=$value['SRC']?>" download><?=$value['ORIGINAL_NAME']?></a>
    </div>
    <? } ?>
</div>
<? } ?>