<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
/** @var array $arResult*/
/** @var array $arParams*/

//TODO phpdoc
?>

<?
if (!empty($arResult)){?>
<div class="side-block side-menu">
    <div class="title-block">Навигация</div>
    <div class="menu-block">
        <ul>
<?
            foreach($arResult as $arItem){
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue; ?>
                <li class="<?=$arItem['SELECTED'] ? 'selected' : ''?>">
                    <a href="<?=$arItem['LINK']?>">
                        <?=$arItem['TEXT']?>
                    </a>
                </li>
            <? }?>
        </ul>
    </div>
</div>
<?}?>
