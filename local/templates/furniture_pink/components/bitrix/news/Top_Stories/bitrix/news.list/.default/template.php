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
    <section class="tssection">
    <h2 class="mains"><?=$arResult['NAME']?></h2>
<?foreach($arResult["ITEMS"] as $arItem) {?>
	<?
    //\Bitrix\Main\Diag\Debug::writeToFile($arItem,"","/debug.log");
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="tssqr">
            <img class="imgts" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
            <div class="tstext">
                <h3><?= $arItem['NAME'] ?></h3>
                <p>
                    <?= $arItem['PREVIEW_TEXT'] ?>
                </p>
                <p>2 hours ago / <?=$arItem['USER_NAME']?></p>
            </div>
        </div>
    </a>
<?}?>
</section>
