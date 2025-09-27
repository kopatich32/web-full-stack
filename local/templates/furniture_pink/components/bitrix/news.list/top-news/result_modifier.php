<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array  $arResult*/
/** @var array  $arParams*/
global $USER;
$getTopNews = \Diploma\Helper::getTopNews();

usort($getTopNews, function($a, $b){
	return ($b['VIEW_COUNT'] - $a['VIEW_COUNT']);
});

$getTopNews = array_column($getTopNews, 'NEWS_ID');

foreach($arResult['ITEMS'] as $key => $val) {
	$res['ITEMS'][$val['ID']] = $val;
}
unset($arResult['ITEMS']);
$arResult = array_merge($arResult, $res);


foreach($getTopNews as $key => $elem) {
	if($arResult['ITEMS'][$elem])
	{
		$arResult['ITEMS'][$elem]['SORT'] = $key * 10;
		$existNews[] = $arResult['ITEMS'][$elem];
	}
}

$arResult['ITEMS'] = array_slice($existNews, 0, $arParams['TOP_NEWS_COUNT']);
