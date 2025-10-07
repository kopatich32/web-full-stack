<?php
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$getData = file_get_contents("php://input");
$json = json_decode($getData, true);
file_put_contents($_SERVER["DOCUMENT_ROOT"]."/_res.log", $json);
