<?php
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$Conn = mysql_connect($db_host, $db_user, $db_pass);
	mysql_selectdb($db_database);

	$user = $_POST['user'];
	$chat = $_POST['chat'];
	$messageNum = $_POST['messageNum'];
	$date = date("Y/m/d H:i:s");
	
	mysql_query("INSERT INTO ".$messageNum." (user, chat) VALUES ('$user', '$chat')");
?>