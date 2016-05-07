<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Share It">
    <meta name="keyword" content="Book, Used, New, Teextbook, Cheap, Market">

    <title>Share It</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="resize:none">

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
  
<script type="text/javascript">

window.onload=function(){
 //window.focus(); // 현재 window 즉 익스플러러를 윈도우 최상단에 위치

window.resizeTo(350,680); // 웹페이지의 크기를 가로 1280 , 세로 800 으로 고정(확장 및 축소)
window.scrollTo(0,250); // 페이지 상단 광고를 바로 볼 수 있게 스크롤 위치를 조정
}



$(document).ready(function() { //이 HTML도큐먼트가 로드되면 실행되는 함수
	$("#send").click(function() { //#send 의 클릭 이벤트 발생시
		
		var form_data = { //POST로 보낼 formdata를 ajax형태로 생성해줌.
			user: $("#user").val(),
			chat: $("#chat").val(),
			messageNum: $("#messageNum").val(),
			is_ajax: 1
		};
		$.ajax({ //Jquery에서 지원하는 AJAX
			type: "POST",
			url: "post.php",
			data: form_data
		});
document.getElementById("chat").value="";
		return false;
	});
});

function ajax_request(url) //이 함수는 Jquery를 사용하지 않은 AJAX
{
	var xhr = new XMLHttpRequest();
	xhr.open('get', url);

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4){
				if(xhr.status === 200){

				$("#chatLog").html(xhr.responseText);
				document.getElementById("chatLog").scrollTop = document.getElementById("chatLog").scrollHeight;
			}else{

				if (xhr.status != 0)
					alert('Error: '+xhr.status);
			}
		}
	}
	xhr.send(null)
}

var timer = setInterval(function () { //인터벌 500인 타이머 생성후 코드 반복 실행
	ajax_request("log.php?messageNum=<? echo $messageNum=$_GET["messageNum"]; ?>"); //0.5초마다 log.php의 내용을 불러온다.
	
	}, 1000);
</script>

<div class="row">
                  <div class="col-lg-12 main-chart">
                  	
						
						<div class="col-lg-12">
      				<! -- ALERTS EXAMPLES -->
      				<div class="showback">
<?php
					
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
			$query="select * from message where messageNum='".$_GET["messageNum"]."'";
			$result4=mysql_query($query);
			$re4=mysql_fetch_array($result4);
			$owner=$re4[2];
			$book=$re4[3];
			$query="select title from book where num='".$book."'";
			$titleB=mysql_fetch_array(mysql_query($query));
			$title=$titleB[0];

	mysql_close($link);
?>
      					<h5><i class="fa fa-angle-right"></i> <? echo $title; ?></h5>
							
							
			<div id="chatLog"  style="overflow-y:auto;overflow-x:hidden;height:370px;" ></div>
						
                            <br/>
			<form id="form1" name="form1" method="post">
				<input type="hidden" class="form-control" id="user" name="user" value="<? session_start(); echo $_SESSION["num"]; ?>">	
<input type="hidden" class="form-control" id="messageNum" name="messageNum" value="<? echo $messageNum; ?>">
                            	<input type="text" class="form-control" id="chat" name="chat" placeholder="">
                           	<input type="submit" class="btn btn-theme" id="send" value="전송" style="margin-top:10px;">
<input type="button" onclick="location.href='cancelDeal.php?messageNum=<? echo $messageNum; ?>'" class="btn btn-theme" id="cancel" value="거래취소" style="margin-top:10px;">
				<?
if($owner==$_SESSION["num"]){
?>	
				
				<input type="button" onclick="location.href='completeDeal.php?messageNum=<? echo $messageNum; ?>'" class="btn btn-theme" id="complete" value="거래완료" style="margin-top:10px;">
<? } ?>
                        </form>		
      				</div><!-- /showback -->
      				
      				
      				
      				
      				
      				
      			
      			</div><!-- /col-lg-6 -->
						
					
				
					
                  </div>

</body>
</html>