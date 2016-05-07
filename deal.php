<?php

$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	
	$me=$_GET["me"];
	$you=$_GET["you"];
	$book=$_GET["book"];
	
	$code=$me.'_'.$you.'_'.$book;
	$query="select phone from user where num='$you'";
	$youPhone=mysql_fetch_array(mysql_query($query));
	$phone=$youPhone[0];
	$query="create table ".$code." (num int not null auto_increment primary key, user varchar(30) not null, chat varchar(1000) not null);";
	mysql_query($query);
	$query="Insert into message (messageNum,me,you,book) values ('$code',$me,$you,$book);";
	mysql_query($query);
	$query="update book set status='거래중' where num='$book' ;";
	mysql_query($query);
	mysql_close($link);
	

require_once("coolsms.php");

$api_key = 'NCS53C2A831865B7';
$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

$rest = new coolsms($api_key, $api_secret);

$options->type = "SMS";
$options->to = $phone;
$options->from = "0000";
$options->text = "[쉐어북스] 올리신 도서에 거래 요청이 들어왔습니다.";
$rest->send($options);

?>
<script>
location.href="index.php";

</script>