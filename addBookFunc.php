<?
	//addBookFunc.php

	require_once("dbinfo.php");

	$link=@mysql_connect($db_host,$db_user,$db_pass) or die("실패입니다");
	
	mysql_select_db($db_database,$link);
	session_start();
	$uploader=$_SESSION["num"];
	$isbn=$_POST["isbn"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$good=$_POST["good"];
	$Oprice=$_POST["Oprice"];
	$price=$_POST["price"];
	$image=$_POST["image"];
	$memo=$_POST["memo"];
	$phone=$_POST["phone"];
	$campus=$_POST["campus"];
	$query="insert into book (uploader,isbn,title,author,good,price,image,Oprice,memo,phone,campus) values ('$uploader','$isbn','$title','$author','$good','$price','$image','$Oprice','$memo','$phone','$campus')";
	
	mysql_query($query) or trigger_error(mysql_error() . $query);

	mysql_close($link);
	
	
?>

<script>

location.href="index.php";

</script>