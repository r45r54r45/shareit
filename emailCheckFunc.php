<?php

	require_once("dbinfo.php");
	$link=@mysql_connect($db_host,$db_user,$db_pass) or die("실패입니다");
	mysql_select_db($db_database,$link);
	$email=$_GET["email"];
	$query="select * from user where email='".$email."'";
	$re=mysql_query($query);
	$result=mysql_fetch_array($re);
	mysql_close($link);
	
	if(!$result)echo "1";

?>