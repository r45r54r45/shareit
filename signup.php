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
	<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

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
	  	
		      <form id="signForm" class="form-login" action="signupFunc.php" method="post">
		        <h2 class="form-login-heading">회원가입</h2>
		        <div class="login-wrap">
		            <input name="email" onchange="emailCheck();" id="email" type="text" class="form-control" placeholder="이메일 (ID로 사용됩니다)" autofocus>
			<span id="innerSpan" style="color:red; font-size:8px;"> </span>
			<input type="hidden" value="-1" id="hiddenEmail">
<script>
function emailCheck(){

if(document.getElementById("email").value!=""&& valid_email(document.getElementById("email")) ){
 $.ajax({
				url: "emailCheckFunc.php?email="+document.getElementById("email").value,
				success: function(data){
					if(data.localeCompare("1")==0){
						document.getElementById("innerSpan").style.color="blue";
						document.getElementById("innerSpan").innerHTML="사용가능한 이메일입니다";	
						document.getElementById("hiddenEmail").value=0;
						}
					else{
						document.getElementById("innerSpan").style.color="red";
						document.getElementById("innerSpan").innerHTML="중복되는 이메일입니다";
						document.getElementById("hiddenEmail").value="-1";
						}
					},
				error: function(){alert("오류!");}
				

			});
}
					

}

function valid_email(ele) {

re=/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;



// 위의 조건을 만족하려면 최소 6자 이상이어야 함.

if(ele.value.length<6 || !re.test(ele.value)) {

ele.select();

ele.focus();

return false;

} else {

return true;

}

}

</script>

		            <br>
                    
		            <input name="password" id="password" type="password" class="form-control" placeholder="비밀번호 (8자리 이상)">
                    <br/>
                    <input id="password2" type="password" class="form-control" placeholder="비밀번호 확인">
                    <hr>
					<select name="campus" id="campus" class="form-control">
						  <option >캠퍼스 선택</option>
						  <option value="연세대(신촌)">연세대(신촌)</option>
						  <option value="연세대(송도)">연세대(송도)</option>
						  <option value="이화여대">이화여대</option>
						  <option value="고려대">고려대</option>
 <option value="서울대">서울대</option>
 <option value="서강대">서강대</option>
 <option value="홍대">홍대</option>
					</select>
		            <br>
					<input name="phone" id="phone" type="text" class="form-control" placeholder="핸드폰 번호" autofocus>
<div id="innerAdd">
 <button id="special" class="btn btn-info btn-block" type="button" onclick="checkPhone();" >핸드폰 인증</button>
</div><br><div class="row">
                    <div class="col-xs-10" > <b><a onclick="window.open('privacy.php','test')">개인정보취급방침</a> 동의</b> </div> <div class="col-xs-2"><input type="checkbox" id="checkBox" ></div>
</div>		         
  <br>
		            <button class="btn btn-theme btn-block" href="index.html" type="button" onclick="checkFill();"><i class="fa fa-login"></i> 회원가입</button>
		            <hr>
		  <script>
	
		function checkPhone(){
			if(document.getElementById("phone").value==""){alert("핸드폰 번호를 입력해주세요");}
			else{
			document.getElementById("phone").readOnly=true;
			$.ajax({
				//type: "GET",
				url: "phoneCheckFunc.php?phone="+document.getElementById("phone").value,
				//data: {'phone':document.getElementById("phone").value},
				//dataType: "html",
				success: function(data){
				
				
				var target=document.getElementById("special");
			target.style.display='none';
			var target=document.getElementById("innerAdd");
			target.innerHTML="<input name=\"number\" id=\"number\" type=\"text\" class=\"form-control\" placeholder=\"인증 번호 입력\" autofocus>  <button id=\"numberConfirm\" class=\"btn btn-info btn-block\" type=\"button\" onclick=\"checkNumber();\" >인증번호 확인</button> <input id=\"hidden\" type=\"hidden\" class=\"form-control\"  autofocus> <input id=\"hidden2\" value=\"-1\" type=\"hidden\" class=\"form-control\"  autofocus>";

document.getElementById("hidden").value=data;
				},// success시 나오는 function의 끝

				error: function(){alert("서버와의 통신에 실패했습니다.");}
				});

	}
}
		function checkNumber(){

var a=document.getElementById("number").value;
var b=document.getElementById("hidden").value;
			if(a.localeCompare(b)==0){
				document.getElementById("hidden2").value=1;
				document.getElementById("number").readOnly=true;
				document.getElementById("numberConfirm").style.display='none';
				document.getElementById("number").style.display='none';
				alert("핸드폰 인증이 성공했습니다.");
}else {
				alert("입력하신 인증번호가 올바르지 않습니다.");
	}
}


		  function checkFill(){
			
			if(document.getElementById('email').value==''){
			alert('이메일을 입력해주세요');
			}else if(document.getElementById("hiddenEmail").value==-1){
			alert("이메일이 중복됩니다");
			}else if(document.getElementById('password').value==''){
			alert('비밀번호를 입력해주세요');
			}else if(document.getElementById('password').value.length<8){
			alert('비밀번호는 최소 8자 이상이어야 합니다.');
			}else if(document.getElementById('campus').value=='캠퍼스 선택'){
			alert('학교를 선택해주세요');
		   }else if(document.getElementById('phone').value==''){
			alert('핸드폰 번호를 입력해주세요');
			}else if(document.getElementById('password').value!=document.getElementById('password2').value){
			alert('확인 비밀번호가 일치하지 않습니다.');
			}else if(document.getElementById("hidden2").value!=1){
				alert("핸드폰 인증을 해주세요.");
			}else if(document.getElementById("checkBox").checked!=true){
				alert("개인정보 취급방침에 동의 해주세요");
			}else{
				document.getElementById('signForm').submit();
			}
			
		  }
		  
		  </script>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">비밀번호 찾기</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>비밀번호 재설정을 위하여 가입시 이메일 주소가 필요합니다</p>
		                          <input type="text" name="email2" placeholder="이메일" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">취소</button>
		                          <button class="btn btn-theme" type="button">확인</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
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
