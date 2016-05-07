<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">

    <title>SHAREIT</title>

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
	  	
		      <form id="loginForm" class="form-login" action="loginFunc.php" method="post">
		        <h2 class="form-login-heading"><i class="fa fa-chevron-circle-left" style="cursor: pointer;" onclick="history.go(-1);"></i> 로그인</h2>
		        <div class="login-wrap">
		            <input name="userid" id="userId" type="text" class="form-control" placeholder="아이디" autofocus>
		            <br>
		            <input name="password" id="password" type="password" class="form-control" placeholder="비밀번호">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> 비밀번호 찾기</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block"  type="button" onclick="checkLoginForm();"><i class="fa fa-lock"></i> 로그인</button>
		            <hr>
		            <script>
					function checkLoginForm(){
					if(document.getElementById('userId').value=='')alert('아이디를 입력해주세요');
					else if(document.getElementById('password').value=='')alert('비밀번호를 입력해주세요');
					else document.getElementById('loginForm').submit();
					}
					</script>
		            <div class="login-social-link centered">
		            <p>SNS 로그인 (준비중)</p>
		                <button class="btn btn-facebook"  onclick="alert('서비스 추가 중입니다.');" disabled><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter"  onclick="alert('서비스 추가 중입니다.');" disabled><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                쉐어북스 계정이 없으세요?<br/>
		                <a class="" href="signup.php">
		                    회원가입
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
		                          <h4 class="modal-title">비밀번호 찾기</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>비밀번호 재설정을 위하여 가입시 이메일 주소가 필요합니다</p>
		                          <input type="text" name="email" placeholder="이메일" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div> 
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">취소</button>
		                          <button class="btn btn-theme" type="button">확인</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		         
		
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
