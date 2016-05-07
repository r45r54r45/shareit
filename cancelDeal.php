<?php
	//거래 불발 캔슬
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
			$query="select book from message where messageNum='".$_GET['messageNum']."'";
			$k=mysql_query($query);
			$result=mysql_fetch_array($k);
			$query="update book set status='거래가능' where num='".$result[0]."'";
			mysql_query($query);
			$query="delete from message where messageNum='".$_GET['messageNum']."'";
			mysql_query($query);
			
			

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
window.opener.window.location.reload(true);

window.close(); 
self.close(); 
window.opener = window.location.href; 
self.close(); 
window.open('about:blank','_self').close();

</script>