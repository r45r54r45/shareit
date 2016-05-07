<?php
session_start();
$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
			$query="select * from message where me=".$_SESSION['num']." or you=".$_SESSION['num']." order by num desc";
$cnt=0;
			$result3=mysql_query($query);
			while( ($re3=mysql_fetch_array($result3)) ){
				if($re3==false)break;
				$cnt++;
				$query="select title from book where num=".$re3[3];
				$kkk=mysql_query($query);
				$bookTitle=mysql_fetch_array($kkk);
?>
	
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" style="
    margin-top: 7px;" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                      	</div>
                      	
                      		<div class="alert alert-warning" style="cursor:pointer; margin-bottom: 0px;"><a onclick="window.open('message.php?messageNum=<? echo $re3[0]; ?>','메세지','scrollbars=no,menubar=no, status=no, titlebar=no,toolbar=no,resizable=no,width=100,height=100');">
                      		   <muted><? echo $bookTitle[0]; ?></muted>
					</a>
                      		</div>
                      
                      </div>
                     
                     <? } ?>
                    <? mysql_close($link); ?>
                     <? if($cnt==0){ ?>
                      <!-- See All -->
                      <div class="desc">
                      
                      		
                      		   <div class="alert alert-warning">메세지가 없습니다.</div>
                      		
                      
                      </div>
<?}?>