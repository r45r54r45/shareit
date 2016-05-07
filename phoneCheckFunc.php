<?php

//phoneCheckFunc.php



require_once("coolsms.php");
$phone=$_GET["phone"];
$secret=mt_rand()%90000+10000;

$api_key = 'NCS53C2A831865B7';
$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

$rest = new coolsms($api_key, $api_secret);

$options->type = "SMS";
$options->to = $phone;
$options->from = $phone;
$options->text = "인증 번호는 ".$secret." 입니다. 올바르게 입력해주세요.";
$rest->send($options);


echo $secret;
?>