<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test api");


$ch = curl_init('https://api.kinopoisk.dev/v1.4/movie/search?page=1&query=%D1%87%D1%83%D0%B6%D0%BE%D0%B9&limit=10');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_HEADER, false);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'X-API-KEY: SKXYM74-VG6M72W-JRRAYD1-GC1W2C9'
    /*'X-API-KEY: Z494M8V-KPTMCEX-HWXWPEM-6FSWX7W'*/
]);

$html = curl_exec($ch);
//echo '<pre>'. print_r($html,true) .'</pre>';

$html = json_decode($html, true);




curl_close($ch);
$name1 = 'железный человек';
$name = '%D0%B6%D0%B5%D0%BB%D0%B5%D0%B7%D0%BD%D1%8B%D0%B9%20%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA';

//$res2 = urldecode($name);
$res2 = urlencode($name1);

//echo '<pre>'. print_r($html,true) .'</pre>';

//$id = reset($html['docs'])['id'];
$exampleLink = 'https://www.sspoisk.ru/film/61237/';

?>
    <iframe src="https://flcksbr.top/film/61237/" frameborder="0" style="width: 700px; height: 700px">
    </iframe>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>