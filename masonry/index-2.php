<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>news feed</title>
        <meta name="keywords" content="javascript, dynamic, grid, layout, jquery plugin, nested grid, metro style"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
	      <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/awesomplete.css"/>
        <link rel="stylesheet" href="css/hover-min.css"/>
	      <link rel="stylesheet" href="css/style-1.css"/>
        <script src="lib/modernizr.js" type="text/javascript"></script>
	    <style type="text/css">
	
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
          <a class="navbar-brand" href="#"><img src="images/log.png" class="img-responsive"></a>
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
  <section class="search-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <form class="">
              <div class="input-group  custome-search-input" >              
                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-search-plus"></i></span>
                <input id="shortSearchList" type="search" class="form-control" placeholder="search your hot news" aria-describedby="sizing-addon1" >
              </div>
              <button type="submit" class="btn btn-default btn-lg custom-submit"><i class="fa fa-long-arrow-right"></i></button>
        </form>
      </div>
    </div>
  </section>
  <section class="topHeadline">
    <div class="container">
      <div class="row"> 
         <div class="col-xs-6">
           <div class="newCatosol newCatosol-height2">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
                <li data-target="#myCarousel" data-slide-to="10"></li>
                <li data-target="#myCarousel" data-slide-to="11"></li>

              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="first-slide" src="images/carousel/01.jpg" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Get the latest BBC World News: international news, features and analysis from Africa, </h1>
                      <p class="ellipsis-text">World : BBC News - BBC.com </p>
                      
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="second-slide" src="images/carousel/02.jpg" alt="Second slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Sports: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/03.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/04.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/05.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/06.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/07.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/08.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/09.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/10.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/11.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/carousel/12.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="ellipsis-text">Example headline. Example headline</h1>
                      <p class="ellipsis-text">Environment: If you're viewing this page via </p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>     
      </div>
         
         <div class="col-xs-6">
           <div class="row">
             <div class="col-xs-4">
              <a href="#">
                 <div class="thumbnail custome-height ">
                    <img class="hvr-bounce-out" src="images/35.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div>
             <div class="col-xs-4">
              <a href="#">
                 <div class="thumbnail custome-height">
                    <img class="hvr-bounce-out" src="images/17.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div>
             <div class="col-xs-4">
              <a href="#">
                 <div class="thumbnail custome-height">
                    <img class="hvr-bounce-out" src="images/33.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div>
             <div class="col-xs-4">
              <a href="#">
                 <div class="thumbnail custome-height">
                    <img class="hvr-bounce-out" src="images/13.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div>
             <div class="col-xs-4">
              <a href="#">
                 <div class="thumbnail custome-height">
                    <img class="hvr-bounce-out" src="images/03.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div>
             <div class="col-xs-4">
              <a href="#">
                 <div class="thumbnail custome-height">
                    <img class="hvr-bounce-out" src="images/02.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div>
             <!-- <div class="col-xs-6 ">
              <a href="#">
                 <div class="thumbnail custome-height">
                    <img class="hvr-bounce-out" src="images/34.jpg" alt="...">
                    <div class="caption thumbnail-caption-custome">
                      <h3 >Thumbnail label</h3>
                      <p>World</p>
                    </div>
                  </div>
                </a>
             </div> -->
           </div>
           
         </div>
      </div>
    </div>
  </section>
    
  <div class="container-fluid">
    <div class="">                
      <div id="masonary">
          <div class="grid-sizer"></div> 
          
    </div>
  </div>


    <!-- ========================JavaScritp Library collection ============= -->
    <script src="lib/jquery.js"></script>
    <script src="lib/masonry.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/handlebars.js"></script>
    <script src="lib/awesomplete.js"></script>
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

    </script>
    <?php include 'hbtemplate/hbtemplate.php';?>
</body>
</html>