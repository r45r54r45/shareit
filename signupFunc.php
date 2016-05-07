<?php
	require_once("dbinfo.php");

	$link=@mysql_connect($db_host,$db_user,$db_pass) or die("실패입니다");
	//print "연결 성공";
	mysql_select_db($db_database,$link);
	//print "선택 성공";
	$email=$_POST["email"];
	$password=$_POST["password"];
	$campus=$_POST["campus"];
	$phone=$_POST["phone"];
	
	//print $email;
	//print $password;
	//print $campus;
	//print $phone;
	//print "데이터 가져오기 성공";

	$query="insert into user (email,password,campus,phone) values ('$email','$password','$campus','$phone')";
	
	

	mysql_query($query);

	$query="select num from user where email='$email'";
	$result=mysql_fetch_array(mysql_query($query));
	mysql_close($link);
	
		session_start();
		$_SESSION["num"]=$result[0];
		$_SESSION["email"]=$email;
		$_SESSION["campus"]=$password;
		$_SESSION["phone"]=$phone;
?>

<script>

location.href="index.php";

</script>