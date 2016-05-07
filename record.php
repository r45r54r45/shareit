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

  </head>

  <body>

  <section id="container" >
     

      <header class="header black-bg">
      
              <div class="sidebar-toggle-box">
                 <!-- <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div> -->
                  <div class="fa fa-bars tooltips" data-placement="right" ></div> 
              </div>
<?php include_once("analyticstracking.php") ?>
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
 			
                    	
		<? session_start(); if(isset($_SESSION["email"])){ ?>
			<li><a class="logout" href="logout.php">로그아웃</a></li>
            	<? }else{ ?>
			<li><a class="logout" href="login.php">로그인</a></li>		

		<? } ?>
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
              	  <p class="centered"><a href="#"><img src="<?echo $url;?>" class="img-circle" width="60"></a></p>

              	  <h5 class="centered"><? if(isset($_SESSION["email"]))echo $_SESSION["email"]; else echo "<a href='login.php'>로그인</a>을 해주세요";?></h5>
              	  	
		
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>대시보드</span>
                      </a>
                  </li>

		   <li class="mt">
                      <a href="<?  if(isset($_SESSION["email"]))echo "listBook.php"; else echo "login.php"; ?> ">
                          <i class="fa fa-plus"></i>
                          <span>책 판매</span>
                      </a>
                  </li>
		<?  if(isset($_SESSION["email"])){ ?>
		  <li class="mt">
                      <a  href="record.php">
                          <i class="fa fa-archive"></i>
                          <span>거래기록</span>
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
	mysql_close($link);

?>
		<!-- <li class="mt">
                      <div class="well" style="padding-top:10px; padding-bottom:10px; text-align:center; font-size:17px"><b>총 <?echo $many[0];?> 권</b></div>
                  </li> -->
             
              
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
                  <div class="col-lg-9 main-chart">
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












			<div class="row mtbox"  style="margin-top: 40px;">
                  		<div class="col-lg-12">
                      <div class="content-panel" style="padding-right:5px; padding-left:5px;">
						  <h4><i class=""></i>내가 올린 도서</h4>

			<section id="no-more-tables">
				<table class="table table-bordered table-striped table-condensed cf" >
                                
                                  <tbody >
                                  
                    <script>
function openInfo2(data,memo){
	
	document.getElementById("addInfo2"+data).innerHTML=memo;


}
</script>                
                               <? 	
 
	session_start();
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	$query="select * from book where uploader=".$_SESSION["num"]." order by num desc";
	$result2=mysql_query($query);
	mysql_close($link);
	

	$i2=0;
					while(($re2=mysql_fetch_array($result2))){
$i2++;
				?>
                                      
                               
                                  

				
  <tr>
                                      <td data-title="Code" style="text-align:center;" width=82px ><img style="padding:0px; margin-bottom:0px" class="thumbnail" src="<? echo $re2[8]; ?>"><a onclick="openInfo2(<?echo $i2;?>,'<?echo $re2[11];?>');"><b>메모보기</b></a></td>
                                      <td data-title="Company"><? echo $re2[3]; ?></td>
                                      
<td class="numeric" data-title="Price" style="text-align:center;padding:0px; width:75px;">
<table class="table  table-s;triped table-condensed" style="padding:0px; margin-bottom:0px">
	
	<tr height=32 style="padding:0px;"> 
<td valign="middle">
<!--<img src="<? if( $re2[6]=="상")echo "/img/b.gif";else if($re2[6]=="미개봉")echo "/img/a.gif";else if($re2[6]=="중")echo "/img/c.gif";else if($re2[6]=="하")echo "/img/d.gif";  ?>">--><button class="btn btn-info" style="width:6em"> <? echo $re2[6]; ?></button>
</td>
	</tr>
	
	<tr height=32 style="padding:0px;"> <td valign="center" ><style>
#ll<?echo $i2;?> {width:6em}
#ll<?echo $i2;?>:hover span {display:none}
#ll<?echo $i2;?>:hover:before {content:"<?echo 100-round($re2[7]/$re2[5]*100)."% 할인";?>"}
	</style>

		<button id="ll<?echo $i2;?>" class="btn" ><span><b><? echo $re2[7]; ?>원</b></span></button></td>
	</tr>
<tr height=32 style="padding:0px;"> <td valign="center">

<?
$notlogined="login.php";
if(isset($_SESSION["num"])){$final2="deal.php?me=".$_SESSION["num"]."&you=".$re2[1]."&book=".$re2[0];
}else $final2=$notlogined;
?>
<button type="submit" class="btn btn-theme" style="width:100%; margin:0px; border:none; " onclick="alert('판매자와의 채팅방이 개설되었습니다.'); location.href='<? echo $final2; ?>'"  <? if( $re2[10]=="거래중"||$re2[10]=="거래완료")echo "disabled"; ?>><? echo $re2[10]; ?> </button>
</td>
	</tr>

</table>

</td>
                                     
                                      
                                     
                                      
                                  </tr>
<tr>

      <td colspan=3 id="addInfo2<?echo $i2;?>"> </td>  

</tr>
				
				<?
				}
if($i2==0){

				?>
<tr>

      <td> 거래기록이 없습니다.</td>  

</tr>

<?}?>
                                  </tbody>
                              </table>				 
                          </section>



                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
                    </div><!-- /row mt table -->







<div class="row mtbox"  style="margin-top: 40px;">
                  		<div class="col-lg-12">
                      <div class="content-panel" style="padding-right:5px; padding-left:5px;">
						  <h4><i class=""></i>내가 구입한 도서</h4>

			<section id="no-more-tables">
				<table class="table table-bordered table-striped table-condensed cf" >
                                
                                  <tbody >
                                  
                                 
                               <? 	
 
	session_start();
	$db_host        = 'localhost';
	$db_user        = 'shareit2015';
	$db_pass        = 'e34e43E34!'; 
	$db_database    = 'shareit2015'; 
	$link=mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link);
	$query="select * from book where  buyer=".$_SESSION["num"] ." order by num desc";
	$result2=mysql_query($query);
	mysql_close($link);
	

	$i2=0;
					while(($re2=mysql_fetch_array($result2))){
$i2++;
				?>
                                      
                               
                                  

				
  <tr>
                                      <td data-title="Code" style="text-align:center;" width=82px ><img style="padding:0px; margin-bottom:0px" class="thumbnail" src="<? echo $re2[8]; ?>"><a onclick="openInfo2(<?echo $i2;?>,'<?echo $re2[11];?>');"><b>메모보기</b></a></td>
                                      <td data-title="Company"><? echo $re2[3]; ?></td>
                                      
<td class="numeric" data-title="Price" style="text-align:center;padding:0px; width:75px;">
<table class="table  table-s;triped table-condensed" style="padding:0px; margin-bottom:0px">
	
	<tr height=32 style="padding:0px;"> 
<td valign="middle">
<!--<img src="<? if( $re2[6]=="상")echo "/img/b.gif";else if($re2[6]=="미개봉")echo "/img/a.gif";else if($re2[6]=="중")echo "/img/c.gif";else if($re2[6]=="하")echo "/img/d.gif";  ?>">--><button class="btn btn-info" style="width:6em"> <? echo $re2[6]; ?></button>
</td>
	</tr>
	
	<tr height=32 style="padding:0px;"> <td valign="center" ><style>
#ll<?echo $i2;?> {width:6em}
#ll<?echo $i2;?>:hover span {display:none}
#ll<?echo $i2;?>:hover:before {content:"<?echo 100-round($re2[7]/$re2[5]*100)."% 할인";?>"}
	</style>

		<button id="ll<?echo $i2;?>" class="btn" ><span><b><? echo $re2[7]; ?>원</b></span></button></td>
	</tr>
<tr height=32 style="padding:0px;"> <td valign="center">

<?
$notlogined="login.php";
if(isset($_SESSION["num"])){$final2="deal.php?me=".$_SESSION["num"]."&you=".$re2[1]."&book=".$re2[0];
}else $final2=$notlogined;
?>
<button type="submit" class="btn btn-theme" style="width:100%; margin:0px; border:none; " onclick="alert('판매자와의 채팅방이 개설되었습니다.'); location.href='<? echo $final2; ?>'"  <? if( $re2[10]=="거래중"||$re2[10]=="거래완료")echo "disabled"; ?>><? echo $re2[10]; ?> </button>
</td>
	</tr>

</table>

</td>
                                     
                                      
                                     
                                      
                                  </tr>
<tr>

      <td colspan=3 id="addInfo2<?echo $i2;?>"> </td>  

</tr>
				
				<?
				}
if($i2==0){

				?>
<tr>

      <td> 거래기록이 없습니다.</td>  

</tr>

<?}?>
                                  </tbody>
                              </table>				 
                          </section>



                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
                    </div><!-- /row mt table -->









                    
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						
                     

                       <!-- USERS ONLINE SECTION -->
<?

if(isset($_SESSION["num"])){
?>
						<h3>메세지</h3>


<script type="text/javascript">





function ajax_request(url) //이 함수는 Jquery를 사용하지 않은 AJAX
{
	var xhr = new XMLHttpRequest();
	xhr.open('get', url);

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4){
				if(xhr.status === 200){

				$("#message1").html(xhr.responseText);
				
			}else{

				if (xhr.status != 0)
					alert('Error: '+xhr.status);
			}
		}
	}
	xhr.send(null)
}

var timer = setInterval(function () { //인터벌 500인 타이머 생성후 코드 반복 실행
	ajax_request("showMessage.php"); }, 1000);
</script>



<div id="message1"></div>

<?}?>




<h3>공지사항</h3>





                   
			

                                        
                
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme" style="margin-top: 7px;"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	
                      		<p><muted>4 July 2015</muted><br/>
                      		   쉐어북스 <a href="https://goo.gl/ViMHsO" target="_blank">페이스북 페이지</a>가 오픈되었습니다.<br/>
                      		</p>
                      	
                      </div>
                    
                        <!-- CALENDAR-->
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
                        </div><!-- / calendar -->

 
                      	<div class="thumb">
                      		<br><br><br><br><br><br><br><br>
                      	</div>
                      	



                      
                  </div><!-- /col-lg-3 -->
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
