<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>news feed</title>
        <meta name="keywords" content="javascript, dynamic, grid, layout, jquery plugin, nested grid, metro style"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/probaze/bootstrap.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
        
        <link rel="stylesheet" href="css/hover-min.css"/>
	<link rel="stylesheet" href="css/style-1.css"/>
        <script src="lib/modernizr.js" type="text/javascript"></script>
	    <style type="text/css">
                .top-margin{
                    margin-top: 70px;
                }
	    </style>
</head>
<body>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header custom-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">news-list</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="home" class="navbar-brand" href="#"><img src="images/log.png" class="img-responsive"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-custom-list">
            <li><a href="#" class="hvr-overline-from-center ">Headlines</a></li>
            <li><a href="#about" class="hvr-overline-from-center ">Bangladesh</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">World</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">Crime</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">Local</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">Technology</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">Offbeat</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">Weekend</a></li>
            <li><a href="#contact" class="hvr-overline-from-center">Reads</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="facebook-color hvr-bounce-to-bottom"><i class="fa fa-facebook"></i></a></li>
            <li><a href="" class="twitter-color hvr-bounce-to-bottom"><i class="fa fa-twitter"></i></a></li>
            <li><a href="" class="linkedin-color hvr-bounce-to-bottom"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="" class="youtube-color hvr-bounce-to-bottom"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  
    
  <div class="container-fluid top-margin">
    <div class="row">
        <div  class="bar-left-menu col-xs-12 hidden-xs col-sm-3 col-md-3 col-lg-3 col-xl-2"> <h1>hellow ajfkdjf djfk akjfkdj kdjfkdjkj</h1>  </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 ">
            <div id="masonary">
                <div class="grid-sizer"></div> 
           </div>
        </div>
        <div class="menu col-xs-12 hidden-xs col-sm-3 col-md-3 col-lg-3 col-xl-2" >  <h1>hellow ajfkdjf djfk akjfkdj kdjfkdjkj</h1> </div>
      
  </div>
  </div>
  <div class="toTop"><a href="#" class="scrollToTop"><i class="fa fa-arrow-up"></i></a></div>


    <!-- ========================JavaScritp Library collection ============= -->
    <script src="lib/jquery.js"></script>
    <script src="lib/masonry.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/handlebars.js"></script>
    
    <script src="js/script-2.js"></script>
    <script type="text/javascript">
      $(function(){
         var shrinkHeader = 100;
          $(window).scroll(function() {
            var scroll = getCurrentScroll();
              if ( scroll >= shrinkHeader ) {
                   $('.search-section').addClass('shrink');
                }
                else {
                    $('.search-section').removeClass('shrink');
                }
          });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
            }
        });
        // $(function(){
        //  var shrinkHeader = 300;
        //   $(window).scroll(function() {
        //     var scroll = getCurrentScroll();
        //       if ( scroll >= shrinkHeader ) {
        //            $('.toTop').addClass('toView');
        //         }
        //         else {
        //             $('.toTop').removeClass('toView');
        //         }
        //   });
        // function getCurrentScroll() {
        //     return window.pageYOffset || document.documentElement.scrollTop;
        //     }
        // });


        
    
       $(document).ready(function(){
  
          //Check to see if the window is top if not then display button
          $(window).scroll( function(){
            if ( $(this).scrollTop() >= 300 ) {
              $('.toTop').addClass('toView').fadeIn();
            } else {
              $('.toTop').removeClass('toView').fadeOut();
            }
          });
          
          //Click event to scroll to top
          $('.toTop').click(function(){
            $('html, body').animate({
                scrollTop : 0
              } , 1000 );
            return false;
          });
          
        });
 
    </script>
    <?php include 'hbtemplate/hbtemplate.php';?>
</body>
</html>