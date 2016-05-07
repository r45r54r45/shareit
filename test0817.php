
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="index,follow"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" hreflang="en" href="https://www.pinncco.com/" />
    <meta name="distribution" content="global">
    <link rel="publisher" href="https://plus.google.com/+Pinncco"/>
    <meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="" />
<meta property="og:site_name" content="Pinncco.com" />
<meta property="og:url" content="https://www.pinncco.com/flights/" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />

<meta property="og:image" content="https://www.pinncco.com/images/default_fb_image.jpg" />


<meta property="fb:admins" content="100006793204003" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@pinncco" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />

<meta name="twitter:url" content="https://www.pinncco.com/flights/" />    <link rel="icon" href="https://www.pinncco.com/favicon.ico">
    <title>Flights - Pinncco.com</title>
    <meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="" />
<meta property="og:site_name" content="Pinncco.com" />
<meta property="og:url" content="https://www.pinncco.com/flights/" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />

<meta property="og:image" content="https://www.pinncco.com/images/default_fb_image.jpg" />


<meta property="fb:admins" content="100006793204003" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@pinncco" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />

<meta name="twitter:url" content="https://www.pinncco.com/flights/" />    <!-- Custom styles for this template -->

    <link href="https://www.pinncco.com/css/style.css" rel="stylesheet">



<!-- Bootstrap core CSS -->

    <link href="https://www.pinncco.com/css/bootstrap.min.css" rel="stylesheet">



<!-- Font Awesome -->

    <link rel="stylesheet" href="https://www.pinncco.com/css/font-awesome.min.css">

    <!-- FLOATING BUTTONS -->

    <link href="https://www.pinncco.com/css/mfb.css" rel="stylesheet">





    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://www.pinncco.com/css/jquery-ui.css" type="text/css" />



<link href='https://fonts.googleapis.com/css?family=Roboto:500,400italic,100,300,500italic,400' rel='stylesheet' type='text/css'>    
    <script src="https://www.pinncco.com/js/respond.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>



    <script src="https://www.pinncco.com/geolocation.js"></script>

    <script type="text/javascript">

    var result;

    $(document).ready(function () {

    $.getJSON("https://www.pinncco.com/airports.json", function(data) {

    var flag = false;

    if (navigator.geolocation) {

    navigator.geolocation.watchPosition(

    function(position) {

    var targetLocation =  {

    lat: position.coords.latitude,

    lon: position.coords.longitude

    };

    if (!flag) {

    flag = true;

    position = closestLocation(targetLocation, data);

    $('#a1').val(position.name + "(" + position.iata + ")");

    }

    },

    function(error){

    geolocationByIp();

    return true;

    },

    {

    enableHighAccuracy:false,

    maximumAge:100000

    });

    } else {

    geolocationByIp();

    }

    });

    setTimeout(function() {

    if (!$('#a1').val()) {

    geolocationByIp();

    }

    }, 7000);

    });

    function geolocationByIp() {

    $.ajax({

    type: "GET",

    url: "https://www.travelpayouts.com/whereami?locale=en&callback=useriata",

    dataType: "jsonp",

    success: function (data) {

    $('#a1').val(data.name + "(" + data.iata + ")");

    },

    });

    }

    </script>

    <script type="text/javascript">

    function dohop_source(request,response){

    $.ajax({

    jsonp:"cb",

    url: "https://picker.dohop.com/search/?lang=en&sid=completer",

    dataType: "jsonp",

    data: {m: 10,input: request.term},

    success: function(data) {

    response($.map(data.standard, function(item) {

    return {label: item.p + "("+item.ac+") "+item.c,value: item.p + "("+item.ac+") " +item.c};

    }));

    }

    });

    }

    $(document).ready(

    function(){

    $("#a1").autocomplete({source: dohop_source,minLength: 2});

    $("#a2").autocomplete({source: dohop_source,minLength: 2});

    $("#d1").datepicker({numberOfMonths: 2,showButtonPanel: true, dateFormat: "dd.mm.y",minDate: new Date(),

    onSelect:function(text,inst){

    $("#d2").datepicker("option","minDate",$("#d1").datepicker("getDate"));

    }

    });

    $("#d2").datepicker({numberOfMonths: 2,showButtonPanel: true, dateFormat: "dd.mm.y",minDate: new Date()});

    }

    );

    </script>

        <!--Tiqets script-->

        <script type="text/javascript">

        $(document).ready(function() {

        $("#mainput").autocomplete({

        source : "https://www.pinncco.com/events/search/autocomplete.php?type=location",

        minLength : 2,

        select : function(event, ui) {

        $('#cityId').val(ui.item.id);

        }

        });

        });

        </script>  </head>
  <body id="page-top">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <video class="heroVideo" autoplay loop muted>
        <source src="https://www.pinncco.com/video/land.ogv">
        <source src="https://www.pinncco.com/video/land.webm">
      </video>
      <div class="container">
        <div class="row">
          <div class="row-home">
            
            <div class="form-header">
              
              <h1></h1>
            </div>
          </div>
        </div>
      </div>
      <!-- Search Box -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
  <div class="search-tabs search-tabs-bg mt60">
    <div class="tabbable">
      <ul class="nav nav-tabs nav-justified" id="myTab">
        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-plane"></i> <span>Flights</span></a>
      </li>
      <li class=""><a href="#tab-2" data-toggle="tab"><i class="fa fa-building-o"></i> <span>Hotels</span></a>
    </li>
    <li class=""><a href="#tab-3" data-toggle="tab"><i class="fa fa-car"></i> <span>Cars</span></a>
  </li>
  <li class=""><a href="#tab-4" data-toggle="tab"><i class="fa fa-music"></i> <span>Events</span></a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane fade in active" id="tab-1">
  <form action="http://flight.pinncco.com/" method="GET">
    <div class="tabbable">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="flight-search-1">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                <label>From</label>
                <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
                  <input class="typeahead form-control tt-hint" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(255, 255, 255, 0.498039);">
                  <input type="text" id="a1" name="a1" value="Your origin... (London, Paris)" autocomplete="on" class="typeahead form-control tt-input" autocomplete="on" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-1"></div></span></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                  <label>To</label>
                  <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
                    <input class="typeahead form-control tt-hint" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(255, 255, 255, 0.498039);">
                    <input type="text" id="a2" name="a2" placeholder="Choose your destination" value="" autocomplete="on" class="typeahead form-control tt-input" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: 'Open Sans', Tahoma, Arial, helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-2"></div></span></span>
                  </div>
                </div>
              </div>
              <div class="input-daterange">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                      <label>Departing</label>
                      <input id="d1" required="true" class="form-control datepicker-from default-cursor" name="d1" type="text" readonly="readonly" placeholder="Choose date">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                      <label>Returning</label>
                      <input id="d2" required="true" class="form-control datepicker-to default-cursor" name="d2" type="text" readonly="readonly" placeholder="Choose date">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="tab-pane fade" id="flight-search-2">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                    <label>From</label>
                    <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
                      <input class="typeahead form-control tt-hint" type="text" autocomplete="on" spellcheck="false" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(255, 255, 255, 0.498039);">
                      <input class="typeahead form-control tt-input" placeholder="City, Airport, U.S. Zip" type="text" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: 'Open Sans', Tahoma, Arial, helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-3"></div></span></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                      <label>To</label>
                      <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
                        <input class="typeahead form-control tt-hint" type="text" autocomplete="on" spellcheck="false" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(255, 255, 255, 0.498039);">
                        <input class="typeahead form-control tt-input" placeholder="City, Airport, U.S. Zip" type="text" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: 'Open Sans', Tahoma, Arial, helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-4"></div></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                        <label>Departing</label>
                        <input id="d1" class="form-control datepicker-from" type="text">
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <button class="waves-effect btn-large btn-orange" type="submit">Search for Flights</button>
          </form>
        </div>
        <div class="tab-pane fade in " id="tab-2">
          <script type="text/javascript">
          var booking = {
          env : {
          b_simple_weekdays: ['Mo','Tu','We','Th','Fr','Sa','Su'],
          b_simple_weekdays_for_js: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
          b_long_weekdays: ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
          }
          }
          function addzero( value )
          {
          while( value.length<2 ) value = String("0") + value;
          return value;
          }
          function checkDateOrder(frm, ci_day, ci_month_year, co_day, co_month_year) {
          if (document.getElementById) {
          var frm = document.getElementById(frm);
          // create date object from checkin values
          // set date to 12:00 to avoid problems with one
          // date being wintertime and the other summertime
          var my = frm[ci_month_year].value.split("-");
          var ci = new Date (my[0], my[1]-1, frm[ci_day].value, 12, 0, 0, 0);
          // create date object from checkout values
          my = frm[co_month_year].value.split("-");
          var co = new Date (my[0], my[1]-1, frm[co_day].value, 12, 0, 0, 0);
          // if checkin date is at or after checkout date,
          // add a day full of milliseconds, and set the
          // selectbox values for checkout date to new value
          if (ci >= co){
          co.setTime(ci.getTime() + 1000 * 60 * 60 * 24);
          frm[co_day].value = co.getDate();
          var com = co.getMonth()+1;
          frm[co_month_year].value = co.getFullYear() + "-" + com;
          }
          }
          }
          </script>
          <!-- start copy sourcecode from here -->
          <div id="Booking_com_plugin" class="Booking_com_plugin">
            <div id="searchboxHolder_309">
              <div id="searchboxInc_309">
                <form id="frm_309" name="frm_309" action="https://www.booking.com/searchresults.html" method="get" target="_blank" autocomplete="on" class="date-picker">
                  <fieldset>
                    <div id="destinationSearch">
                      <input type="hidden" name="aid" value="394130">
                      <input type="hidden" name="error_url" value="https://www.booking.com/?aid=394130;">
                      <input type="hidden" name="si" value="ai,co,ci,re,di">
                      <input type="hidden" name="label" value="homepage-engine" />
                      <input type="hidden" name="lang" value="en-gb" />
                      <input type="hidden" name="selected_currency" value="">
                      <input type="hidden" name="nflt" value="">
                      <input type="hidden" name="ifl" value="1">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                            <label>Destination</label>
                            <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
                              <input class="typeahead form-control tt-hint" type="text" autocomplete="on" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(255, 255, 255, 0.498039);">
                              <input id="destination" required="true" name="ss" class="typeahead form-control tt-input" aria-autocomplete="list" aria-haspopup="true" placeholder="Choose your destination" value="" autocomplete="on" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: 'Open Sans', Tahoma, Arial, helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-3"></div></span></span>
                            </div>
                          </div>
                          <div id="inout">
                            <div id="homein">
                              <div class="input-daterange">
                                <div class="col-md-3">
                                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-in date</label>
                                    <input type="text" required="true" class="default-cursor full_checkin_date_309 form-control datepicker-from" value="Check in date" title="Check in date" readonly="readonly">
                                  </div>
                                </div>
                                <div hidden="" style="display:none;">
                                  <p>
                                    <input type="text" name="checkin_year_month" class="checkin_year_month_309" value="15-03">
                                  </p>
                                  <p id="checkin_monthday">
                                    <input name="checkin_monthday" type="text" value="31">
                                  </p>
                                </div>
                                <div id="homeout">
                                  <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                      <label>Check-out date</label>
                                      <input type="text" required="true" class="default-cursor full_checkout_date_309 form-control datepicker-to" value="Check out date" title="Check out date" readonly="readonly">
                                    </div>
                                  </div>
                                </div>
                                <div hidden="" style="display:none;">
                                  <p>
                                    <input type="text" name="checkout_year_month" class="checkout_year_month_309" value="15-04">
                                  </p>
                                  <p id="checkout_monthday">
                                    <input name="checkout_monthday" type="text" value="02">
                                  </p>
                                </div>
                              </div>
                              <div class="button">
                                <button class="waves-effect btn-large btn-orange" type="submit">Search for hotels</button>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                    jQuery(document).ready(function() {
                    jQuery('.full_checkin_date_309').datepicker({
                    firstDay: 1,
                    numberOfMonths: 1,
                    dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
                    monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December']
                    ,
                    buttonImageOnly: false,
                    minDate : '0',
                    dateFormat: 'D, dd M. yy',
                    altFormat: 'yy-mm',
                    altField: ".checkin_year_month_309",
                    onClose: function (dateText, picker) {
                    // getDate returns a js Date object
                    var dateObject = jQuery(this).datepicker("getDate");
                    console.dir(dateObject);
                    jQuery( ".full_checkout_date_309" ).datepicker( "option", "minDate", dateObject );
                    // Call Date object methods
                    jQuery("#checkin_monthday input").val(dateObject.getDate());
                    },
                    beforeShow: function(input, inst) {
                    var newclass = 'calendar-base';
                    if (!inst.dpDiv.parent().hasClass('calendar-base')){
                    inst.dpDiv.wrap('<div class="'+newclass+'"></div>')};
                    },
                    });
                    jQuery('.full_checkout_date_309').datepicker({
                    firstDay: 1,
                    numberOfMonths: 1,
                    dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
                    monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December']
                    ,
                    buttonImageOnly: false,
                    minDate : '1',
                    dateFormat: 'D, dd M. yy',
                    altFormat: 'yy-mm',
                    altField: ".checkout_year_month_309",
                    onClose: function (dateText, picker) {
                    // getDate returns a js Date object
                    var dateObject = jQuery(this).datepicker("getDate");
                    console.dir(dateObject);
                    jQuery( ".full_checkin_date_309" ).datepicker( "option", "maxDate", dateObject );
                    // Call Date object methods
                    jQuery("#checkout_monthday input").val(dateObject.getDate());
                    },
                    });
                    });
                    </script>
                    <!-- end copy sourcecode until here -->
                  </div>
                  <div class="tab-pane fade in " id="tab-3">
                    <form name="SearchResultsForm" target="_blank" method="post" action="https://secure.rentalcars.com/LoadingSearchResults.do?affiliateCode=pinncco" accept-charset="UTF-8" id="SearchResultsForm">
                      <div class="row">
                        <label>Choose Pick Up Location</label>
                        <div class="col-md-4">
                          <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-globe input-icon-top"></i>
                            <div id="countryWrap">
                            <select class="typeahead form-control tt-hint" id="country" name="country" vaule=""></select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-building-o input-icon-top"></i>
                          <div id="cityWrap">
                          <select class="typeahead form-control tt-hint" id="city" name="city" vaule=""></select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon-top"></i>
                        <div id="locationWrap">
                        <select class="typeahead form-control tt-hint" id="location" name="location"></select>
                      </div>
                    </div>
                  </div>
                  <input id="returntolocation" type="hidden" name="puSameAsDo" value="on">
                  <input id="dropCountry" type="hidden" name="dropCountry" value="">
                  <input id="dropCity" type="hidden" name="dropCity" value="">
                  <input id="dropLocation" type="hidden" name="dropLocation" value="">
                  <input id="locationName" type="hidden" name="locationName" value="">
                  <input id="dropLocationName" type="hidden" name="dropLocationName" value="">
                </div>
                <div class="row">
                  <div class="input-daterange">
                    <div class="col-md-3">
                      <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                        <label>Pick up Date</label>
                        <input class="form-control datePicker default-cursor" id="pickDate" readonly="readonly">
                        <input type="hidden" name="puDay" id="puDay" value="27">
                        <input type="hidden" name="puMonth" id="puMonth" value="6">
                        <input type="hidden" name="puYear" id="puYear" value="2014">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                        <label class="pickTimLbl">Time</label>
                        <div class="time style height">
                        <select class="timePicker typeahead form-control tt-hint" id="pickTime"></select>
                        <input class="timeHidden" type="hidden" id="puHour" name="puHour" value="11">
                        <input class="timeHidden" type="hidden" id="puMinute" name="puMinute" value="30">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                      <label>Drop off Date</label>
                      <input class="form-control datePicker default-cursor" id="dropDate" readonly="readonly">
                      <input type="hidden" name="doDay" id="doDay" value="27">
                      <input type="hidden" name="doMonth" id="doMonth" value="6">
                      <input type="hidden" name="doYear" id="doYear" value="2014">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                      <label class="pickTimLbl">Time</label>
                      <div class="time style height">
                      <select class="timePicker typeahead form-control tt-hint" id="dropTime"></select>
                    </div>
                    <input class="timeHidden" type="hidden" id="doHour" name="doHour" value="11">
                    <input class="timeHidden" type="hidden" id="doMinute" name="doMinute" value="30">
                  </div>
                </div>
                
                <div class="col-md-2">
                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-user input-icon input-icon-highlight"></i>
                    <label class="driversAge">Drivers Age:</label>
                    <input class="form-control" name="driversAge" value="25">
                  </div>
                </div>
              </div>
            </div>
            <button class="waves-effect btn-large btn-orange" type="submit">Compare Car Rentals</button>
            <input type="hidden" name="emptySearchResults" value="true">
            <input type="hidden" name="fromLocChoose" value="true">
            <input type="hidden" name="preflang" id="preflang" value="">
            <input type="hidden" name="prefcurrency" id="prefcurrency" value="">
            <input type="hidden" name="affiliateCode" id="affiliateCode" value="">
            <input type="hidden" name="adplat" id="adplat" value="">
            <input type="hidden" name="adcamp" id="adcamp" value="">
            <input type="hidden" name="enabler" id="enabler" value="">
          </form>
        </div>
        <div class="tab-pane fade in " id="tab-4">
          <form method="GET" action="https://www.pinncco.com/events/search/search.php" accept-charset="UTF-8" id="searchForm">
            <div class="input-daterange" data-date-format="M d, D">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                    <label>Where are you going?</label>
                    <input type="hidden" name="cityId" id="cityId" value="<?=isset($_GET['cityId'])?$_GET['cityId']:''?>" />
                    <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
                    <input class="typeahead form-control tt-hint" type="text" disabled="" autocomplete="off" spellcheck="false" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(255, 255, 255, 0.498039);">
                    <input id="mainput" class="typeahead form-control tt-input" required="true" placeholder="" type="text" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                    <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: 'Open Sans', Tahoma, Arial, helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                    <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-8"></div>
                    </span>
                    </span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                    <label>From</label>
                    <input class="form-control datepicker-from default-cursor" name="start" type="text" readonly="readonly" placeholder="Choose date" required="required">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                    <label>To</label>
                    <input class="form-control datepicker-to default-cursor" name="end" type="text" readonly="readonly" placeholder="Choose date" required="required">
                  </div>
                </div>
              </div>
            </div>
            <button class="waves-effect btn-large btn-orange" type="submit">Search for Activities</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>          
        </div>
      </div>
      <!-- /Search Box -->
      <div class="header-pattern"></div>
    </div>
    <!-- Main Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand topnav" href="/"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
    <ul class="nav navbar-nav">

        <li class="active">
            <a href="/flights/">
                Flights
            </a>   
                     
        </li>

        <li>
            <a href="/hotels/">
                Hotels
            </a>   
                     
        </li>

        <li>
            <a href="/cars/">
                Cars
            </a>   
                     
        </li>

        <li>
            <a href="/destinations/">
                Destinations
            </a>   
                     
        </li>

        <li>
            <a href="/events/">
                Events
            </a>   
                     
        </li>

        <li>
            <a href="/about/">
                About
            </a>   
                     
        </li>

    </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a><i class="fa fa-phone nav-contact"></i>+44 922 740 526</a></li>
            <li><a><i class="fa fa-envelope nav-contact"></i>info(at)pinncco.com</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- Breadcrumbs -->
    <div class="content-bcrumb">
      <div class="container">
        <div class="row">
          
		
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
			
			<li>
				
					Flights
						
					</li>
					
					</ol>
				
        </div>
      </div>
    </div>
    <!-- / End of Breadcrumbs -->
    <!-- Sales messages -->
    <div id="sales" class="container sales">

    
      </div>
      <!-- End of sales messages -->
        <!-- Page Content -->
        <div id="content">
          <div class="container">
            <div class="content-section">
              <h2 class="center container-section">Check Out Our Top Destinations!
              <p class="lead">Search and compare from the best travel sites</p></h2>
              <hr>
            <div class="row">
            

            </div>
            </div>
            <!-- /.row -->
             <!--Newsletter form -->
                     <div class="form-group">
            <div class="newsletter centered-for-mobile">
              <form id="contact-form" name="contact-form" method="post" action="https://pinncco.us3.list-manage.com/subscribe/post" target="_blank">
                <input type="hidden" name="u" value="d77f508064a42529159fa5f35">
                <input type="hidden" name="id" value="eaedc0f486">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="newsletter-title">
                      Subscribe to best deals!
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 input-field-mt"><i class="fa fa-user fa-2x prefix"></i>
                    <input type="text-mt" name="MERGE3" class="textbox" required="true" placeholder="Enter your name...">
                  </div>
                  <div class="col-lg-3 col-md-3 input-field-mt"><i class="fa fa-at fa-2x prefix"></i>
                    <input type="email-mt" name="MERGE0" class="textbox" required="true" placeholder="Enter your email...">
                  </div>
                  <div class="col-md-2 col-sm-2">
                    <button class="waves-effect btn btn-indigo submit">Sign me up</button>
                  </div>
                </div>
              </form>
              <div class="row topx1">
                <div class="col-lg-12">
                  <p>
                    Be the first to receive best deals from pinncco.com. No spam, we promise.
                  </p>
                </div>
              </div>
            </div>
            </div>
                    <ul class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
            <li>
              <a href="#page-top" data-mfb-label="Back to top" data-mfb-label="label with long long title" class="page-scroll mfb-component__button--child up">
                <i class="mfb-component__child-icon fa fa-chevron-up fixtop"></i>
              </a>
            </li>
          </ul>
        </div>
        <!--Social Buttons -->

        <div class="container-fluid social">

          <div class="row">

            <a class="facebook col-md-4" href="https://www.facebook.com/sharer.php?u=+https://www.pinncco.com/flights/index.php" target="_blank" title="Click to share"></a>

              <a class="twitter col-md-4" href="https://twitter.com/intent/tweet?url=https://www.pinncco.com/flights/index.php" target="_blank" title="Click to share"></a>

            <a class="google col-md-4" href="https://plus.google.com/share?url=https://www.pinncco.com/flights/index.php" target="_blank" title="Click to share"></a>

            </div><!-- /.row -->

          </div>
         <!--Contact Form -->
          <!-- Footer start -->

<footer>
  <div class="content footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3>Pinncco</h3>
          <ul>
            <li> <a href="/flights" rel="nofollow">Flights</a> </li>
            <li> <a href="/hotels" rel="nofollow">Hotels</a> </li>
            <li> <a href="/cars" rel="nofollow">Car Rentals</a> </li>
            <li> <a href="/events" rel="nofollow">Events</a> </li>
            <li> <a href="/destinations" rel="nofollow">Destinations</a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3>Community</h3>
          <ul>
            <li> <a href="https://twitter.com/pinncco" rel="noffolow" target="blank">Twitter</a> </li>
            <li> <a href="https://facebook.com/pages/Pinnccocom/161797837352772" rel="nofollow" target="blank">Facebook</a> </li>
            <li> <a href="https://www.google.com/+Pinncco" rel="nofollow" target="blank">Google+</a> </li>
            <li> <a href="https://instagram.com/pinncco/" rel="nofollow" target="blank">Instagram</a> </li>
            <li> <a href="#" rel="nofollow" target="blank">Contact Us</a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3>Company</h3>
          <ul>
            <li> <a href="https://www.pinncco.com/blog/">Blog</a> </li>
            <li> <a href="/about" rel="nofollow">About Us</a> </li>
            <li> <a href="#">Advertise With Us</a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3>Fun Stuff</h3>
          <ul>
            <li> <a href="/about/privacy/">Privacy</a> </li>
            <li> <a href="/about/terms/">Terms of Use</a> </li>
            <li> <a href="#">FAQ</a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3>Pinncco Newsletter</h3>
          <form id="contact-form" name="contact-form" method="post" action="https://pinncco.us3.list-manage.com/subscribe/post" target="_blank">
            <input type="hidden" name="u" value="d77f508064a42529159fa5f35">
            <input type="hidden" name="id" value="eaedc0f486">
            <ul>
              <li>
                <div class="input-append newsletter-box text-center">
                  <input type="text-mt" name="MERGE3" class="textbox" required="true" placeholder="Enter your name...">
                  <input type="email-mt" name="MERGE0" class="textbox" required="" placeholder="Enter your email...">
                  <button class="waves-effect btn btn-indigo submit">Sign me up</button>
                </div>
              </li>
            </ul>
          </form>
          <ul class="social-footer">
            <li> <a href="https://facebook.com/pages/Pinnccocom/161797837352772" rel="nofollow" target="blank"> <i class=" fa fa-facebook">   </i> </a> </li>
            <li> <a href="https://twitter.com/pinncco" rel="nofollow" target="blank"> <i class="fa fa-twitter">   </i> </a> </li>
            <li> <a href="https://www.google.com/+Pinncco" rel="nofollow" target="blank"> <i class="fa fa-google-plus">   </i> </a> </li>
            <li> <a href="https://instagram.com/pinncco/" rel="nofollow" target="blank"> <i class="fa fa-instagram">   </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </div>
  <!--/.footer-->
  
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left">Copyright © Pinncco.com <script type="text/javascript">
        document.write(new Date().getFullYear());
      </script>. Made with &hearts; in Manchester. All right reserved. </p>
      <div class="pull-right"><img src="https://www.pinncco.com/images/icons/geotrust-pinncco.png" alt="pinncco geotrust logo" />
      </div>
    </div>
  </div>
  <!--/.footer-bottom-->
</footer>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WPC2CF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPC2CF');</script>
<!-- End Google Tag Manager -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://www.pinncco.com/js/datepicker.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="https://www.pinncco.com/js/jquery.easing.min.js"></script>
<script src="https://www.pinncco.com/js/scrolling-nav.js"></script>
<script src="https://www.pinncco.com/js/main.js"></script>
<script src="https://www.pinncco.com/js/validate.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- Floating buttons -->
<script src="https://www.pinncco.com/js/mfb.js"></script>
<script src="https://www.pinncco.com/js/materialize.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#firstImage').offset().top
    }, 'slow');
    </script>

<script>

  $( function()
  {
      // ACTIVITY INDICATOR

    var activityIndicatorOn = function()
      {
        $( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
      },
      activityIndicatorOff = function()
      {
        $( '#imagelightbox-loading' ).remove();
      },


      // OVERLAY

      overlayOn = function()
      {
        $( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
      },
      overlayOff = function()
      {
        $( '#imagelightbox-overlay' ).remove();
      },


      // CLOSE BUTTON

      closeButtonOn = function( instance )
      {
        $( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
      },
      closeButtonOff = function()
      {
        $( '#imagelightbox-close' ).remove();
      },


      // CAPTION

      captionOn = function()
      {
        var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
        if( description.length > 0 )
          $( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
      },
      captionOff = function()
      {
        $( '#imagelightbox-caption' ).remove();
      },


      // NAVIGATION

      navigationOn = function( instance, selector )
      {
        var images = $( selector );
        if( images.length )
        {
          var nav = $( '<div id="imagelightbox-nav"></div>' );
          for( var i = 0; i < images.length; i++ )
            nav.append( '<button type="button"></button>' );

          nav.appendTo( 'body' );
          nav.on( 'click touchend', function(){ return false; });

          var navItems = nav.find( 'button' );
          navItems.on( 'click touchend', function()
          {
            var $this = $( this );
            if( images.eq( $this.index() ).attr( 'href' ) != $( '#imagelightbox' ).attr( 'src' ) )
              instance.switchImageLightbox( $this.index() );

            navItems.removeClass( 'active' );
            navItems.eq( $this.index() ).addClass( 'active' );

            return false;
          })
          .on( 'touchend', function(){ return false; });
        }
      },
      navigationUpdate = function( selector )
      {
        var items = $( '#imagelightbox-nav button' );
        items.removeClass( 'active' );
        items.eq( $( selector ).filter( '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ).index( selector ) ).addClass( 'active' );
      },
      navigationOff = function()
      {
        $( '#imagelightbox-nav' ).remove();
      },


      // ARROWS

      arrowsOn = function( instance, selector )
      {
        var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

        $arrows.appendTo( 'body' );

        $arrows.on( 'click touchend', function( e )
        {
          e.preventDefault();

          var $this = $( this ),
            $target = $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
            index = $target.index( selector );

          if( $this.hasClass( 'imagelightbox-arrow-left' ) )
          {
            index = index - 1;
            if( !$( selector ).eq( index ).length )
              index = $( selector ).length;
          }
          else
          {
            index = index + 1;
            if( !$( selector ).eq( index ).length )
              index = 0;
          }

          instance.switchImageLightbox( index );
          return false;
        });
      },
      arrowsOff = function()
      {
        $( '.imagelightbox-arrow' ).remove();
      };


    //  WITH ACTIVITY INDICATION

    $( 'a[data-imagelightbox="a"]' ).imageLightbox(
    {
      onLoadStart:  function() { activityIndicatorOn(); },
      onLoadEnd:    function() { activityIndicatorOff(); },
      onEnd:      function() { activityIndicatorOff(); }
    });


    //  WITH OVERLAY & ACTIVITY INDICATION

    $( 'a[data-imagelightbox="b"]' ).imageLightbox(
    {
      onStart:   function() { overlayOn(); },
      onEnd:     function() { overlayOff(); activityIndicatorOff(); },
      onLoadStart: function() { activityIndicatorOn(); },
      onLoadEnd:   function() { activityIndicatorOff(); }
    });


    //  WITH "CLOSE" BUTTON & ACTIVITY INDICATION

    var instanceC = $( 'a[data-imagelightbox="c"]' ).imageLightbox(
    {
      quitOnDocClick: false,
      onStart:    function() { closeButtonOn( instanceC ); },
      onEnd:      function() { closeButtonOff(); activityIndicatorOff(); },
      onLoadStart:  function() { activityIndicatorOn(); },
      onLoadEnd:    function() { activityIndicatorOff(); }
    });


    //  WITH CAPTION & ACTIVITY INDICATION

    $( 'a[data-imagelightbox="d"]' ).imageLightbox(
    {
      onLoadStart: function() { captionOff(); activityIndicatorOn(); },
      onLoadEnd:   function() { captionOn(); activityIndicatorOff(); },
      onEnd:     function() { captionOff(); activityIndicatorOff(); }
    });


    //  WITH ARROWS & ACTIVITY INDICATION

    var selectorG = 'a[data-imagelightbox="g"]';
    var instanceG = $( selectorG ).imageLightbox(
    {
      onStart:    function(){ arrowsOn( instanceG, selectorG ); },
      onEnd:      function(){ arrowsOff(); activityIndicatorOff(); },
      onLoadStart:  function(){ activityIndicatorOn(); },
      onLoadEnd:    function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
    });


    //  WITH NAVIGATION & ACTIVITY INDICATION

    var selectorE = 'a[data-imagelightbox="e"]';
    var instanceE = $( selectorE ).imageLightbox(
    {
      onStart:   function() { navigationOn( instanceE, selectorE ); },
      onEnd:     function() { navigationOff(); activityIndicatorOff(); },
      onLoadStart: function() { activityIndicatorOn(); },
      onLoadEnd:   function() { navigationUpdate( selectorE ); activityIndicatorOff(); }
    });


    //  ALL COMBINED

    var selectorF = 'a[data-imagelightbox="f"]';
    var instanceF = $( selectorF ).imageLightbox(
    {
      onStart:    function() { overlayOn(); closeButtonOn( instanceF ); arrowsOn( instanceF, selectorF ); },
      onEnd:      function() { overlayOff(); captionOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },
      onLoadStart:  function() { captionOff(); activityIndicatorOn(); },
      onLoadEnd:    function() { captionOn(); activityIndicatorOff(); $( '.imagelightbox-arrow' ).css( 'display', 'block' ); }
    });

  });

</script>

</body>
</html>


     </body>
    </html>