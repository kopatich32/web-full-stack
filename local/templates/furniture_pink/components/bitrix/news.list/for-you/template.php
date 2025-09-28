<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="foryouall">
	<?if($arResult['SECTION']){?>
		<h1><?=reset($arResult['SECTION']['PATH'])['NAME']?></h1>
	<? } ?>
    <section class="foryouin">
        <?
        $counter = 0;
        foreach ($arResult["ITEMS"] as $arItem) {
            // Open a new row for every first item (0, 3, 6, etc.)
            if ($counter % 3 == 0) {
                echo '<div class="row">';
            }

            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a class="rect" href="<?= $arItem['DETAIL_PAGE_URL'] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <img class="rectimg" src="<?= $arItem['RESIZED_IMG'] ?>" alt="">
                <div class="recttxt">
                    <h2><?= $arItem['NAME'] ?></h2>
                    <p>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                    <p class="rectp">
                        15 hours ago / by <?= $arItem['USER_NAME']?>
                    </p>
                </div>
            </a>
            <?
            // Close the row after every third item or at the end
            if ($counter % 3 == 2) {
                echo '</div>';
            }

            $counter++;
        }

       /* // If the total items aren't divisible by 3, we need to close the last row
        if (($counter - 1) % 3 != 2) {
            echo '</div>';
        }*/
        ?>
    </section>
</div>
<?