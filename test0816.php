<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="index,follow"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />

    <title>Vistara.co.kr</title>
    <link rel="shortcut icon" href="http://app.unbounce.com/favicon.ico" type="image/x-icon"/>
    <!-- Custom styles for this template -->

    <link href="https://www.pinncco.com/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->

    <link href="https://www.pinncco.com/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.pinncco.com/css/font-awesome.min.css">

    <!-- FLOATING BUTTONS -->

    <link href="https://www.pinncco.com/css/mfb.css" rel="stylesheet">

    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://www.pinncco.com/css/jquery-ui.css" type="text/css" />



    <script src="https://www.pinncco.com/js/respond.js"></script>


     
  </head>
  <body >
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color:#F7FBFC; box-shadow:0 2px 5px rgba(150, 135, 135, 0.4);">
    	 <h3>Find cheap flights</h3>
    <!--  <video class="heroVideo" autoplay loop muted>
        <source src="https://www.pinncco.com/video/land.ogv">
        <source src="https://www.pinncco.com/video/land.webm">
      </video> -->
 
	
      <div class="container">
        <div class="row">
        <div class="col-md-12">
		<script type="text/javascript" src="//static.dohop.com/swl/js/iframe.js?wl=vistara"></script>
    </div>
    </div>
    </div>
  <!--  <div class="header-pattern"></div> -->
    <!-- Main Navigation -->
   <nav style="background-color:#4896C4; border-color:#4896C4;" class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar" style="background-color: #FFF;"></span>
          <span class="icon-bar" style="background-color: #FFF;"></span>
          <span class="icon-bar" style="background-color: #FFF;"></span>
          </button>
          <img style="margin-top: 10px;margin-left: 20px; margin-top: 10px;" class="topnav img-responsive " href="/" src="http://i.imgur.com/0Zkl0cZ.png?1">
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse " id="bs-example-navbar-collapse-1" aria-expanded="true">
         
    <ul class="nav navbar-nav">
<!-- 
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
-->
    </ul> 
          <ul class="nav navbar-nav navbar-right">
            <li><a style="color: #FFF;"><i class="fa fa-phone nav-contact"></i>+82 10 8484 3512</a></li>
            <li><a style="color: #FFF;"><i class="fa fa-envelope nav-contact"></i>info(at)vistara.co.kr</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
     
 


</div>

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

<footer>
  
  <!--/.footer-->
  
  <div style="background-color:#4896C4; border-color:#4896C4;" class="footer-bottom">
    <div class="container">
      <p class="pull-left" style="color: #E8E6E6;">Copyright © vistara.co.kr <script type="text/javascript">
        document.write(new Date().getFullYear());
      </script>. All right reserved. </p>
     
    </div>
  </div>
  <!--/.footer-bottom-->
</footer>
</body>
</html>


