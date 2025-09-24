<?
function show($arr) {
    ?>
     <pre><?=print_r($arr,true)?></pre>

    <?
}

if(file_exists(__DIR__ .'/helper.php')) {
	require_once(__DIR__ .'/helper.php');
}


Bitrix\Main\Loader::registerAutoLoadClasses(
	null,
	[
		'Diploma\Helper' => '/local/php_interface/Helper.php',
		'Bitrix\News\DataTable' => '/local/php_interface/DataTable.php',
	]
);
