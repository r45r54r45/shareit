<?php

//error_reporting(E_ALL);
//ini_set("display_errors", 1);
    	define('NAVERKEY', '7f4bdf112cdec57fed129e872eb9a09d');
    	$publisher = "";     
  	$searchBook = "책 제목을 입력해주세요";  
	$image="";
	$price=0;
	$url ="";
    	$title="안나타남";
    	$isbnCode ="안나타남";
	
    if (isset ($_GET["searchBook"])) { 
  	$searchBook= trim($_GET["searchBook"]);
        $encodedquery = urlencode($searchBook);   
        $url = "http://openapi.naver.com/search?query=$encodedquery&display=1&target=book_adv&d_titl=$encodedquery&key=".NAVERKEY;
	$title = simplexml_load_file($url)->channel->item[0]->title;
        $isbnCode = simplexml_load_file($url)->channel->item[0]->isbn; 
	$image = simplexml_load_file($url)->channel->item[0]->image; 
	$price = simplexml_load_file($url)->channel->item[0]->price; 
	$author = simplexml_load_file($url)->channel->item[0]->author; 
	$company = simplexml_load_file($url)->channel->item[0]->publisher; 
	$link2=simplexml_load_file($url)->channel->item[0]->link;
	

	//require_once("dbinfo.php");
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	$query="insert into searchlog (title) values ('$searchBook')";
	mysql_query($query);
	$query="select * from book where title like '%$searchBook%' order by num desc";
	$result=mysql_query($query);
	mysql_close($link);
	
   

 }
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Share It">
    <meta name="keyword" content="Book, Used, New, Textbook, Cheap, Market">

    <title>SHAREBOOKS | 쉐어북스</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet"/>

    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css"/>    
    
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>

    <script src="assets/js/chart-master/Chart.js"></script>
   

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64816014-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body>
	<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('3738-132-10-7944');/*]]>*/</script><noscript><a href="https://www.olark.com/site/3738-132-10-7944/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
  <section id="container" >
     

      <header class="header black-bg">


      
              <div class="sidebar-toggle-box">
                 <!--글 안 뜨게 지움. 진우. <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div> -->
                  <div class="fa fa-bars tooltips" data-placement="right" ></div> 
              </div>

            <!--logo start-->
            <a href="index.php" class="logo"><b>ShareBooks</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start --> 
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
 			
                    <!--	
		<? session_start(); if(isset($_SESSION["email"])){ ?>
			<li><a class="logout" href="logout.php">로그아웃</a></li>
            	<? }else{ ?>
			<li><a class="logout" href="login.php">로그인</a></li>		

		<? } ?>
-->
<li><a class="logout" href="listBook.php">책 올리기</a></li>	
		</ul>

            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              <?


 if(isset($_SESSION["campus"])){

  if($_SESSION["campus"]=="연세대(신촌)"||$_SESSION["campus"]=="연세대(송도)")
	$url="img/yonsei.png";
	else if($_SESSION["campus"]=="이화여대")
	$url="img/ewha.png";
	else if($_SESSION["campus"]=="고려대")
	$url="img/korea.png";
}else $url="assets/img/ui-sam.jpg";





 ?>
              <!--	  <p class="centered"><a href="#"><img src="<?echo $url;?>" class="img-circle" width="60"></a></p>

              	  <h5 class="centered">쉐어북스</h5>
              	  	-->
		
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>전공도서 검색</span>
                      </a>
                  </li>

		   <li class="mt">
                      <a href="<?  if(isset($_SESSION["email"]))echo "listBook.php"; else echo "listBook.php"; ?> ">
                          <i class="fa fa-plus"></i>
                          <span>전공도서 판매</span>
                      </a>
                  </li>
		<?  if(isset($_SESSION["email"])) {?>
   		<li class="mt">
                      <a href="record.php">
                          <i class="fa fa-list-ul"></i>
                          <span>내 거래기록</span>
                      </a>
                  </li>
		<?}?>

                 <!-- <li class="sub-menu">
                       <a href="<? if(isset($_SESSION["email"]))echo "userinfo.php"; else echo "login.php"; ?> ">
                          <i class="fa fa-desktop"></i>
                          <span>내 정보</span>
                      </a> 
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li> -->
<? 
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	$query="SELECT COUNT(*) FROM book";
	$many=mysql_fetch_array(mysql_query($query));
	$query="SELECT COUNT(*) FROM book where buyer !='' ";
	$manyDone=mysql_fetch_array(mysql_query($query));
	mysql_close($link);

?>
		 <li class="mt">
                      <div class="well" style="padding-top:10px; padding-bottom:10px; text-align:center; "><b>업로드: <?echo 100+$many[0];?> 권</b><br><br><b>거래완료: <?echo 38+$manyDone[0];?> 권</b></div>
                  </li> 
             	
              
                  <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
			  
              <div class="row">
                  <div class="col-lg-12 main-chart"style="padding-top: 0px;">
                  	<!--row mt start-->
                  	<!--<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>933</h3>
                  			</div>
					  			<p>933 People liked your page the last 24hs. Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>48 New files were added in your cloud storage.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>23</h3>
                  			</div>
					  			<p>You have 23 unread messages in your inbox.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 news were added in your reader.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax & enjoy.</p>
                  		</div>
                  	
                  	</div>--><!-- /row mt -->	
                  


  <!-- BASIC FORM ELELEMNTS -->

			
                    <div class="row mt" style="
    margin-top: 15px;
">
                        <div class="col-lg-12">
                          <div class="form-panelNew"> <!-- form-panel -->
                             <div class="row" style="height: 50px;">
<div class="col-lg-3"></div>
                              <div class="col-lg-6">
                          <form class="content-inline" role="form" method="get" action="/index.php">
							<div class="form-group">
                              <label class="sr-only" for="searchBook"></label>
<style>
input::-webkit-input-placeholder { font-size: 13pt;  }
input::-moz-placeholder { font-size: 13pt;}
input:-ms-input-placeholder { font-size: 13pt; }
input:-moz-placeholder { font-size: 13pt;  }
</style>       
                       <input type="text" style="height:50px;" class="form-control" id="searchBook" name="searchBook" placeholder="<? echo $searchBook ?>">
							</div>
                          </form>
</div>
 <div class="col-lg-3"></div>

</div>
			
			<? if(isset($_GET["searchBook"])&&$isbnCode!=""){ ?>
                          <section id="no-more-tables">
			<input type="button" id="showmebtn" class="btn btn-block btn-info" onclick="document.getElementById('showme').style.display=''; document.getElementById('showmebtn').style.display='none';" value="새 책 정보 펼치기"> 
			<div class="well" id="showme" style="display:none">
				<div class="row">
					<div class="col-sm-3 hidden-xs"><img src="<? echo $image; ?>"></div>
					<div class="col-sm-3 visible-xs"><div style="text-align:center;">모바일에서는 사진 보기를 지원하지 않습니다</div></div>
					<div class="col-sm-9 col-xs-12">
						<div class="well">
						<div class="row">
							<div class="col-xs-3">제목</div>										<div class="col-xs-9"><? echo $title; ?></div>	
						</div>
						
						<div class="row">
							<div class="col-xs-3">출판사</div>										<div class="col-xs-9 "><? echo $company; ?></div>	
						</div>
					
						<div class="row">
							<div class="col-xs-3 ">저자</div>										<div class="col-xs-9 "><? echo $author; ?></div>	
						</div>
					
						<div class="row">
							<div class="col-xs-3 ">정가</div>										<div class="col-xs-9 "><? echo $price; ?>원</div>	
						</div>
						
						</div>
					</div>		
		
                             	</div>
				<div class="row">
							<div class="col-xs-12"><button  class="btn btn-theme" style="width:100%; margin:0px; border:none; " onclick="window.open('<? echo $link2; ?>','','');" >새 책 구매</button></div>										
						</div>
			</div>
		<? 
				

				$i=0;
				while(($re=mysql_fetch_array($result))){
					$i++;
					if($i==1){
				?>


				<table class="table table-bordered  table-condensed cf" >
                                  
                                  <tbody >
                                  
                                 
                                 <? } ?>
                                      
                                  
                                  

				
  <tr>
                                      <td bgcolor=#f9f9f9 data-title="Code" style="text-align:center; border-right: 1px solid #f9f9f9;" width=82px ><img style="padding:0px; margin-bottom:0px" class="thumbnail" src="<? echo $re[8]; ?>"><b><? echo $re[14]; ?></b></td>
                                      <td bgcolor=#f9f9f9 data-title="Company" style="border-right: 1px solid #f9f9f9;"><? echo $re[3]; ?> </td>
                                      
<td bgcolor=#f9f9f9 class="numeric" data-title="Price" style="text-align:center;padding:0px; width:75px;" >
<table class="table  table-condensed" style="padding:0px; margin-bottom:0px; border-collapse: collapse; border: none;">
	
	<tr height=32 style="padding:0px;"> 
<td bgcolor=#f9f9f9 style=" border:none; outline:none;" valign="middle">
<!--<img src="<? if( $re[6]=="상")echo "/img/b.gif";else if($re[6]=="미개봉")echo "/img/a.gif";else if($re[6]=="중")echo "/img/c.gif";else if($re[6]=="하")echo "/img/d.gif";  ?>"> --> 

<button class="btn btn-info" style="width:6em" disabled> <? echo $re[6]; ?></button>

</td>
	</tr>
	
	<tr height=32 style="padding:0px;"> <td bgcolor=#f9f9f9 style=" border:none; outline:none;" valign="center" >
		<style>
#ll<?echo $i;?> {width:6em}
#ll<?echo $i;?>:hover span {display:none}
#ll<?echo $i;?>:hover:before {content:"<?echo 100-round($re[7]/$re[5]*100)."% 할인";?>"}
	</style>

		<button id="ll<?echo $i;?>" class="btn" ><span><b><? echo $re[7]; ?>원</b></span></button>

</td>
	</tr>
<tr height=32 style="padding:0px;"> <td bgcolor=#f9f9f9 style=" border:none; outline:none;" valign="center">
<?
$notlogined="login.php";
if(isset($_SESSION["num"])){$final="deal.php?me=".$_SESSION["num"]."&you=".$re[1]."&book=".$re[0];
}else $final=$notlogined;
?>
<button type="submit" class="btn btn-theme" style="width:100%; margin:0px; border:none; " onclick="location.href='deal2.php?book=<?echo $re[0]; ?> '; " <? if( $re[10]=="거래중"||$re[10]=="거래완료")echo "disabled"; ?>><? echo $re[10]; ?> </button>

</td>
	</tr>




</table>

</td>
                                     
                         
                                     
                                   
                                  </tr>
<? if($re[11]!=""){ ?>
<tr >

      <td colspan=3 bgcolor=#f9f9f9><?echo $re[11];?> </td>  

</tr>
<?}?>
<tr><td colspan=3 style="border-left:1px solid white; border-right:1px solid white; "></td></tr>

				
				<?
				}
				
				if($i!=0){
				?>
                                 
                                  </tbody>
                              </table>
				<? }else{ ?>
	 			<div class="alert alert-warning" style="text-align:center; " > 중고도서 검색 결과가 없습니다.</div>
					<? 
				}
					?>
								 
                          </section>

				<? } else if($isbnCode==""){?>

<div class="alert alert-warning" style="text-align:center; " > 도서 검색 결과가 없습니다.</div>


					<? } ?>
                          </div>
                        </div><!-- col-lg-12-->      	
                    </div><!-- /row -->
                    <!--row mt start table-->





                  	<div class="row mtbox"  style="margin-top: 40px;">
                  		<div class="col-lg-12">
                      <div class="content-panel" style="padding-right:5px; padding-left:5px;">
						  <h4><i class=""></i>최근 업로드 된 도서</h4>

			<section id="no-more-tables"> 
				<table class="table table-bordered  table-condensed cf" style="border-collapse: collapse;">
                                
                                  <tbody >
                                  
                          
                               <? 	
 
	
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	$query="select * from book order by num desc limit 5";
	$result2=mysql_query($query);
	mysql_close($link);
	

	$i2=0;
					while(($re2=mysql_fetch_array($result2))){
$i2++;
				?>
                                      
                               
                                  

				
  <tr bgcolor=#f9f9f9 >
                                      <td data-title="Code" style="text-align:center;   border-right: 1px solid #f9f9f9;" width=82px ><img style="padding:0px; margin-bottom:0px" class="thumbnail" src="<? echo $re2[8]; ?>"><b><? echo $re2[14]; ?></b></td>
                                      <td data-title="Company" style="border-right: 1px solid #f9f9f9;"><? echo $re2[3]; ?></td>
                                      
<td class="numeric" data-title="Price" style="text-align:center;padding:0px; width:75px;">
<table class="table  table-condensed" cellspacing="0" cellpadding="0" style="padding:0px; margin-bottom:0px; border-collapse: collapse; border: none;">
	
	<tr bgcolor=#f9f9f9 height=32 style="padding:0px;"> 
<td valign="middle" style=" border:none; outline:none;">
<!--<img src="<? if( $re2[6]=="상")echo "/img/b.gif";else if($re2[6]=="미개봉")echo "/img/a.gif";else if($re2[6]=="중")echo "/img/c.gif";else if($re2[6]=="하")echo "/img/d.gif";  ?>">--><button class="btn btn-info" style="width:6em; curser:default;" disabled> <? echo $re2[6]; ?></button>
</td>
	</tr>
	
	<tr bgcolor=#f9f9f9 height=32 style="padding:0px;"> <td valign="center" style=" border:none; outline:none;">
<style>
#ll<?echo $i2;?> {width:6em}
#ll<?echo $i2;?>:hover span {display:none}
#ll<?echo $i2;?>:hover:before {content:"<?echo 100-round($re2[7]/$re2[5]*100)."% 할인";?>"}
	</style>

		<button id="ll<?echo $i2;?>" class="btn" ><span><b><? echo $re2[7]; ?>원</b></span></button></td>
	</tr>
<tr bgcolor=#f9f9f9 height=32 style="padding:0px;"> <td valign="center"style=" border:none; outline:none;">

<?
//$notlogined="login.php";
//if(isset($_SESSION["num"])){$final2="deal.php?me=".$_SESSION["num"]."&you=".$re2[1]."&book=".$re2[0];
//}else $final2=$notlogined;
?>
<button type="submit" class="btn btn-theme" style="width:100%; margin:0px; border:none; " onclick=" location.href='deal2.php?book=<?echo $re2[0]; ?>';"  <? if( $re2[10]=="거래중"||$re2[10]=="거래완료")echo "disabled"; ?>><? echo $re2[10]; ?> </button>
</td>
	</tr>

</table>

</td>
                                     
                                      
                                     
                                      
                                  </tr>

				<? if($re2[11]!=""){ ?>
<tr >

      <td colspan=3 bgcolor=#f9f9f9><?echo $re2[11];?> </td>  

</tr>
<?}?>
<tr><td colspan=3 style="border-left:1px solid white; border-right:1px solid white; "></td></tr>

				<?
				}
				?>
				<tr><td align=center >더보기</td> </tr>
                                  </tbody>
                              </table>				 
                          </section>



                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
                    </div><!-- /row mt table -->	
                   












					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-md-4 mb">
                      		<!--<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#68dff0"
											},
											{
												value : 40,
												color : "#444c57"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p>April 17, 2014</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
									</div>
									<div class="pull-right">
										<h5>60% Used</h5>
									</div>
								</footer>
                      		</div>--><! -- /darkblue panel -->
						</div><!-- /col-md-4 -->
						
						
						<div class="col-md-4 mb">
							<!-- INSTAGRAM PANEL -->
							<!--<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@THISISYOU<br/>
									5 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
							</div>-->
						</div><!-- /col-md-4 -->
						
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<!--<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>-->
						</div><!-- /col-md-4 -->
						
					</div><!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <!--<div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>-->
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
              <div class="col-lg-3 ds hidden-lg hidden-md hidden-sm hidden-xs" >
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						
                     

                       <!-- USERS ONLINE SECTION -->
<?

if(isset($_SESSION["num"])){
?>
						<h3>메세지</h3>
                      <!-- First Member -->
			


<script>
function ajax_request(url) //이 함수는 Jquery를 사용하지 않은 AJAX
{
	var xhr = new XMLHttpRequest();
	xhr.open('get', url);

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4){
				if(xhr.status === 200){

				$("#showmessage").html(xhr.responseText);
				
			}else{

				if (xhr.status != 0)
					alert('Error: '+xhr.status);
			}
		}
	}
	xhr.send(null)
}

var timer = setInterval(function () { //인터벌 500인 타이머 생성후 코드 반복 실행
	ajax_request("showMessage.php"); //0.5초마다 log.php의 내용을 불러온다.
	
	}, 1000);
</script>

<div id="showmessage"></div>



<?}?>
<h3>공지사항</h3>
                                        
                
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	
                      		<p><muted>4 July 2015</muted><br/>
                      		   쉐어북스 <a href="https://goo.gl/ViMHsO" target="_blank">페이스북 페이지</a>가 오픈되었습니다.<br/>
                      		</p>
                      	
                      </div>
                    
                        <!-- 
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div> -->


                      	<div class="thumb">
                      		<br>
                      	</div>
                    



                      
                  </div>
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Copyright ⓒ SHAREBOOKS 2015. All Rights Reserved.
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	<!-- Pop Up-->
	<!--<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to ShareIt',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. <a href="#" target="_blank" style="color:#ffd777"></a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>-->
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
            $(".popover-top").popover({trigger: 'hover','placement': 'top'});
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
 
	
  </body>
</html>

