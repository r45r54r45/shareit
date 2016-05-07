<?php
	//거래 완료
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
			
			$query="update book set status='거래완료' where num='".$_GET['abc']."'";

			mysql_query($query);
			
			$query="select phone from book where num='".$_GET['abc']."'";

			$seller=mysql_fetch_array(mysql_query($query));
			
require_once("coolsms.php");

$api_key = 'NCS53C2A831865B7';
$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

$rest = new coolsms($api_key, $api_secret);

$options->type = "SMS";
$options->to = $seller[0];
$options->from = "0000";
$options->text = "[쉐어북스] 거래가 완료되었습니다. 이용해주셔서 감사합니다." ;
$rest->send($options);
			

?>

<script>
alert('거래가 완료되었습니다.');
location.href="/index.php";

</script>