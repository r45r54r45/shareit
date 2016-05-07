<?php
	//거래 완료
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
			$query="select * from message where messageNum='".$_GET['messageNum']."'";
			$k=mysql_query($query);
			$result=mysql_fetch_array($k);
			$query="update book set status='거래완료' where num='".$result[3]."'";
			mysql_query($query);
			$query="delete from message where messageNum='".$_GET['messageNum']."'";
			mysql_query($query);
			$query="update book set buyer=".$result[1]." where num='".$result[3]."'";
			mysql_query($query);
			
			
			

?>

<script>
alert('거래가 완료되었습니다.');
window.opener.window.location.reload(true);
window.close(); 
self.close(); 
window.opener = window.location.href; 
self.close(); 
window.open('about:blank','_self').close();

</script>