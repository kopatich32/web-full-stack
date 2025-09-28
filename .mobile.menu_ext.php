<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "N",
	"SEF_BASE_URL" => "",
	"SECTION_PAGE_URL" => "/news/#SECTION_ID#/",
	"DETAIL_PAGE_URL" => "/news/#SECTION_ID#/#ELEMENT_ID#",
	"IBLOCK_TYPE" => "news	",
	"IBLOCK_ID" => NEWS_IBLOCK_ID,
	"DEPTH_LEVEL" => "1",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>