<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult["ITEMS"] as $key => &$arItem) {
    $arItem['RESIZED_IMG'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], ['width' => 100, 'height' => 100], false)['src'];
}
