<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
use Bitrix\Main\Diag\Debug,
	Diploma\Helper;


Helper::setViewCount($arResult["ID"], $arResult['IBLOCK_SECTION_ID'], $arResult['SECTION']['PATH'][0]['CODE'], $arResult['SECTION']['PATH'][0]['NAME']);