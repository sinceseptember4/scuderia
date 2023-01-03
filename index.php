<?php


$json = file_get_contents("php://input");

$contents = json_decode($json, true);
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');
echo $json;
file_put_contents("date.txt", $time.$json."\n" , FILE_APPEND);
