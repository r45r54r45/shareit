﻿<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">

    <title>SHAREBOOKS</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

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


	  <div id="login-page">
	
	  	<div class="container">

 <form id="loginForm" class="form-login" action="deal2func.php" method="post">
		        <h2 class="form-login-heading"><i class="fa fa-chevron-circle-left" style="cursor: pointer;" onclick="history.go(-1);"></i>판매자 메뉴</h2>
		        <? 
		



				$book=($_GET['book']+7)/3; ?>
<br>
<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-5">
		       <input type="button" class="btn btn-warning btn-block" onclick="location.href='/b.php?abc=<? echo $book; ?>';" value="거래 취소">	
</div>
<div class="col-xs-5">			
 <input type="button" class="btn btn-primary btn-block" onclick="location.href='/c.php?abc=<? echo $book; ?>';" value="거래 완료">
		</div>
<div class="col-xs-1"></div>

</div>
		       <br>
		         
		
		      </form>	
	  		
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bgMain.jpg", {speed: 500});
    </script>


  </body>
</html>
