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
        <link rel="stylesheet" href="css/innerpage.css"/>
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
 
  <section class="innerMain-contain">
       <div class="container-fluid">
        <div class="">                
            <article>
                <div class="row">
                    <div class="col-xs-12">
                        <h2>TOP STORIES/Latest stories </h2>
                        
                        
                    </div>
                </div>
            </article>
            <article>
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="headlin-full lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h1>
                         <div class="col-xs-12">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By <span class=text-info">Joge Lucky </span>  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="row">
                    <div class="col-xs-2">
                        
                        <div class="profider-of-new text-center">
                            <img src="images/Prothom-Alo-en.png">
                            <p>prothom alo newspaper</p>
                                
                        </div>
                        <ul class="list-group social-network-list">
                            <li class="list-group-item facebook-color-inner">
                              <span class="badge">14</span>
                              <i class="fa fa-facebook"></i> Share
                            </li>
                            <li class="list-group-item twitter-color-inner">
                              <span class="badge">14</span>
                              <i class="fa fa-twitter"></i> Tweet
                            </li>
                            <li class="list-group-item linkedin-color-inner">
                              <span class="badge">14</span>
                             <i class="fa fa-linkedin"></i> Linke In
                            </li>
                            <li class="list-group-item youtube-color-inner">
                              <span class="badge">14</span>
                              <i class="fa fa-youtube-play"></i> Youtube
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7">
                        <h1 class="headlin-full lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h1>
                        <div class="row"> 
                            <div class="col-xs-12 profile-info">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By <span class="text-info">Joge Lucky </span>  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                       <div class="thumbnail news-Full">
                           <img class="img-responsive" src="images/01.jpg" alt="mynews">
                            <div class="caption">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              
                            </div>
                          </div> 
                    </div>
                    <div class="col-xs-3">
                        <h2>FROM OUR CORRESPONDENTS</h2>
                        <ul class="list-group corrospondents">
                            <li class="list-group-item">
                               <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div> 
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-3.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                               <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-2.jpg" alt="..." class="w-full img-circle">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <h2>Most popular</h2>
                        <ul class="list-group most-popular-list">
                            <li class="list-group-item">
                               <a herf="" class="pull-left w-41 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-responsive">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div> 
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left w-41 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-responsive">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left w-41 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-responsive">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left w-41 m-r">
                                    <img src="images/user-3.jpg" alt="..." class="w-full img-responsive">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                               <a herf="" class="pull-left w-41 m-r">
                                    <img src="images/user-2.jpg" alt="..." class="w-full img-responsive">
                                </a>
                                <div class="clear text-ellipsis">
                                    <div><a href="">By Joge Lucky  - 3day ago in Dhaka</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </article>
        </div>
    </div> 
  </section>
   
  <div class="toTop"><a href="#" class="scrollToTop"><i class="fa fa-arrow-up"></i></a></div>


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
                } else {
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