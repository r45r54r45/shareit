<style>
	body {background:#444;}
</style>

<?php
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$messageNum=$_GET["messageNum"];
	$Conn = mysql_connect($db_host, $db_user, $db_pass);
	mysql_selectdb($db_database);
	session_start();
	$data = mysql_query("SELECT * FROM ".$messageNum." ORDER BY num");

	while ($row = mysql_fetch_array($data))
	{
		if($row['user']==$_SESSION["num"]){
			echo(' <div class="alert alert-info" >'.$row['chat'].'</div>  ');
		}else{
			echo('<div class="alert alert-success">'.$row['chat'].'</div>');
		}
	}
?>