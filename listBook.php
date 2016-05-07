<?php
	define('NAVERKEY', '7f4bdf112cdec57fed129e872eb9a09d');
	$title="제목";
	$author ="저자";
	$isbn="ISBN을 입력하세요";
	$price="정가";
    if (isset ($_GET["searchBook"])) { 
        $searchBook= trim($_GET["searchBook"]);
        $encodedquery = urlencode($searchBook);   
        $url = "http://openapi.naver.com/search?query=$encodedquery&display=1&target=book_adv&d_isbn=$encodedquery&key=".NAVERKEY; // API 요청
		//$url="http://openapi.naver.com/search?key=c1b406b32dbbbbeee5f2a36ddc14067f&query=%EC%82%BC%EA%B5%AD%EC%A7%80&display=10&start=1&target=book";
	    $title = simplexml_load_file($url)->channel->item[0]->title;
        $author = simplexml_load_file($url)->channel->item[0]->author;
  $image = simplexml_load_file($url)->channel->item[0]->image;
		$isbnarr = split(' ',simplexml_load_file($url)->channel->item[0]->isbn);
		$price = "정가: ".simplexml_load_file($url)->channel->item[0]->price;
		$rprice = simplexml_load_file($url)->channel->item[0]->price;	
		$isbn=$isbnarr[1];
    }
	
?>
<!DOCTYPE html>
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
	  	<?php include_once("analyticstracking.php") ?>
		      <form id="bookForm" class="form-login" action="addBookFunc.php" method="post" style="margin-top: 20px;">
		        <h2 class="form-login-heading"><i style="cursor: pointer;" class="fa fa-chevron-circle-left" onclick="history.go(-1);"></i> 전공서적 등록</h2>
		        <div class="login-wrap">
		            <input id="isbnP"  type="text" class="form-control" placeholder="<?echo $isbn;?>" >
					<input name="isbn"  id="isbn" type="hidden" class="form-control" value="" >
		            <br>
<!-- onkeydown="return showKeyCode(event);" -->
                    
                    <button class="btn btn-theme btn-block" type="button" onclick="getInfo();"><i class="fa fa-login"></i> 정보 끌어오기</button>
                    <script>
					function getInfo(){
						var isbn=document.getElementById('isbnP').value;
						if(isbn!='')location.replace('http://shareit2015.cafe24.com/listBook.php?searchBook='+isbn);
					}
					</script>
                    <br>
                    
		            <input name="title" id="title" type="text" style="text-align:center;" class="form-control" value="<? echo $title; ?>" readonly>
                    <br/>
                    <input name="author" id="author" type="hidden" class="form-control" style="text-align:center;" value="<? echo $author; ?>" readonly>
					 
                    <input id="price7" type="text" class="form-control" style="text-align:center;" value=" <?echo $price;?>" readonly>
<input name="Oprice" id="price2" type="hidden" class="form-control" style="text-align:center;" value=" <?echo $rprice;?>" readonly>
                    <hr>
					<select name="campus" id="campus" class="form-control">
						  <option >캠퍼스 선택</option>
						  <option value="연세대(신촌)">연세대(신촌)</option>
						  <option value="연세대(송도)">연세대(국제)</option>
						  <option value="이화여대">이화여대</option>
						  <option value="고려대">고려대</option>
 <option value="서울대">서울대</option>
 <option value="서강대">서강대</option>
 <option value="홍익대">홍익대</option>
					</select>
<br>

					<select name="good" id="good" class="form-control">
						  <option>상태</option>
						   <option value="미개봉">미개봉</option>
						  <option value="상">상</option>
						  <option value="중">중</option>
						  <option value="하">하</option>
						   <option value="최하">최하</option>
					</select>
		            <br>
					<input name="price" id="price" type="text" class="form-control" placeholder="희망 가격" onkeydown="return showKeyCode(event);" >
<br>
<textarea style="resize: none; wrap:hard;" name="memo" id="memo" class="form-control" placeholder="특이사항 (입력 권장)"></textarea>
<br>
<input name="phone" id="phone" type="text" class="form-control" placeholder="핸드폰 번호(연락 받을 번호)" onkeydown="return showKeyCode(event);">
<input name="image" id="image" type="hidden" class="form-control" value="<? echo $image; ?>" >
                    	<script>
		function showKeyCode(event) {
			event = event || window.event;
			var keyID = (event.which) ? event.which : event.keyCode;
			if( ( keyID >=48 && keyID <= 57 ) || ( keyID >=96 && keyID <= 105 )||keyID==8 )
			{
				return;
			}
			else
			{
				return false;
			}
		}
	</script>
		            <br>
		            <button class="btn btn-theme btn-block" type="button" onclick="checkForm();"><i class="fa fa-login"></i> 등록하기</button>
		            <hr>
		            <script>
					function checkForm(){
						if(document.getElementById('isbn').value=='ISBN을 입력하세요'){
						alert('ISBN을 입력해주세요');
			}else if(document.getElementById('title').value==''){
			alert('올바른 ISBN을 입력해주세요');
			}else if(document.getElementById('campus').value=='캠퍼스 선택'){
			alert('캠퍼스를 선택해주세요');
			}else if(document.getElementById('good').value=='상태'){
			alert('상태를 선택해주세요');
		   }else if(document.getElementById('price').value==''){
			alert('가격을 입력해주세요');
  		 }else if(document.getElementById('phone').value==''){
			alert('핸드폰 번호를 입력해주세요');
			}else{
				document.getElementById('isbn').value=document.getElementById('isbnP').placeholder;
				document.getElementById('bookForm').submit();
			}
						
						
					}
					
					</script>
		  
		
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
