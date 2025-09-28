<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */

foreach($arResult['ITEMS'] as &$elem)
	$elem['RESIZED_IMG'] = CFile::ResizeImageGet($elem['PREVIEW_PICTURE']['ID'], ['width' => 400, 'height' => 400])['src'];