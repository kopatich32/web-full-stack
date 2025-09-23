<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?

$requestPath = 'https://api.kinopoisk.dev/';
$fullPath = 'https://api.kinopoisk.dev/v1.4/movie/61237';
$token = 'Z494M8V-KPTMCEX-HWXWPEM-6FSWX7W';

$headers = [
    "X-API-KEY: Z494M8V-KPTMCEX-HWXWPEM-6FSWX7W",
    "accept: application/json"];


$ch = curl_init($fullPath);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, $headers);
$html = curl_exec($ch);
curl_close($ch);

echo '<pre>'. print_r($html,true) .'</pre>';
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>