<?php
	//거래 불발 캔슬
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
			$kkk=$_GET['abc'];
			$query="update book set status='구매' where num='$kkk'";
			mysql_query($query);
			$query="select phone from book where num='$kkk'";
			$seller=mysql_fetch_array(mysql_query($query));
			
require_once("coolsms.php");

$api_key = 'NCS53C2A831865B7';
$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

$rest = new coolsms($api_key, $api_secret);

$options->type = "SMS";
$options->to = $seller[0];
$options->from = "0000";
$options->text = "[쉐어북스] 거래가 취소되었습니다. 요청하신 책은 다시 거래가능 상태로 바뀝니다." ;
$rest->send($options);

			
			

?>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64784697-1', 'auto');
  ga('send', 'pageview');

</script>
<!--Google Analytics END-->

<script>
alert('거래가 취소되었습니다.');
location.href='/index.php';

</script>