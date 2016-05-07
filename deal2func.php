<?php

$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	
	$buyer=$_POST["phone"];
	$book=$_POST["book"];
	
	
	$query="select phone,title from book where num='$book'";
	$sellerPhone=mysql_fetch_array(mysql_query($query));
	$seller=$sellerPhone[0];
	$title=$sellerPhone[1];
	$query="Insert into dealLog (buyer,seller,book) values ($buyer,$seller,$book);";
	mysql_query($query);
	$query="update book set status='거래중' where num='$book' ;";
	mysql_query($query);
	$query="update book set buyer='$buyer' where num='$book' ;";
	mysql_query($query);
	mysql_close($link);

require_once("coolsms.php");

$api_key = 'NCS53C2A831865B7';
$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

$rest = new coolsms($api_key, $api_secret);
$bookT=mb_substr($title, 0, 4, "UTF-8");


$options->type = "SMS";
$options->to = $buyer;
$options->from = "0000";
$options->text = "[쉐어북스] 요청하신 도서(".$bookT.")에 거래가 신청되었습니다. 판매자 핸드폰: ".$seller;
$rest->send($options);



$options->type = "SMS";
$options->to = $seller;
$options->from = "0000";
$options->text = "[쉐어북스] 올리신 도서(".$bookT.")에 거래 요청이 들어왔습니다. 구매자 핸드폰: ".$buyer;
$rest->send($options);


$bookEncoded=($book*3)-7;

$options->type = "SMS";
$options->to = $seller;
$options->from = "0000";
$options->text = "거래완료 및 취소: http://sharebooks.kr/x.php?book=$bookEncoded ";
$rest->send($options);

?>
<script>
location.href="index.php";

</script>