<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => &$arItem)
{
    $arItem['RESIZED_IMG'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], ['width' => 80, 'height' => 80])['src'];
}
