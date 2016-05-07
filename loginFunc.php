<?
  	//loginFunc.php

require_once("dbinfo.php");

	$link=@mysql_connect($db_host,$db_user,$db_pass) or die("실패입니다");

	mysql_select_db($db_database,$link);

	$userid=$_POST["userid"];
	$password=$_POST["password"];


	$query="select * from user where email='$userid' ";
	
	
	$re=mysql_query($query);
	$result=mysql_fetch_array($re);

	
	
	$flag=0;
	if(strcmp($result[2],$password)==0){
		session_start();
		$_SESSION["num"]=$result[0];
		$_SESSION["email"]=$result[1];
		$_SESSION["campus"]=$result[3];
		$_SESSION["phone"]=$result[4];
		$query="insert into loginlog (email) values ('$result[1]')";
		mysql_query($query);
?>
mysql_close($link);
<script>
location.href="index.php";
</script>

<? }else{ ?>
mysql_close($link);
<script>
alert('비밀번호가 틀렸습니다.');
location.href="index.php";
</script>

<? }?>