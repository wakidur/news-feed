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
        <link rel="stylesheet"  href="css/lightslider.css"/>
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
    </div>
  </section>
 
  <section class="innerMain-contain">
       <div class="container">
        <div class="">                
            <article>
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="topNews">TOP STORIES/Latest stories </h2>
                        <div class="item">
                            <ul id="content-slider" class="content-slider">
                                <li> 
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/22.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/23.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/24.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/29.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/18.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/19.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/20.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/25.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/26.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="images/01.jpg" alt="..."/>
                                            <div class="caption">
                                                <div class="clear text-ellipsis">
                                                    <div>Joge Lucky</div>
                                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </article>
            <article>
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="headlin-full lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h1>
                    </div>
                </div>
            </article>
            <article>
                <div class="row">
                    <div class="col-xl-2">
                        
                        <div class="profider-of-new">
                            <a herf="" class="pull-left w-40 m-r">
                                    <img src="images/user-1.jpg" alt="..." class="w-full img-circle">
                            </a>
                            <div class="clear text-ellipsis">
                                <div><a href="">Joge Lucky</a></div>
                                <small class="text-muted-dk">Art director, Movie Cut</small>
                            </div>
                            <p class="text-center">3 day ago</p>
                            <p class="text-center"> <i class="fa fa-map-marker"></i> Dhaka</p>
                            
                                
                        </div>
                        <ul class="list-group social-network-list">
                            <li class="list-group-item facebook-color-inner">
                              <span class="badge">20</span>
                              <i class="fa fa-facebook"></i> Share
                            </li>
                            <li class="list-group-item twitter-color-inner">
                              <span class="badge">1</span>
                              <i class="fa fa-twitter"></i> Tweet
                            </li>
                            <li class="list-group-item linkedin-color-inner">
                              <span class="badge">100</span>
                             <i class="fa fa-linkedin"></i> Linke In
                            </li>
                            <li class="list-group-item youtube-color-inner">
                              <span class="badge">0</span>
                              <i class="fa fa-youtube-play"></i> Youtube
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-7">
                        <div class="clearfix"></div>
                       <div class="thumbnail news-Full">
                           <img class="img-responsive" src="images/36.jpg" alt="mynews">
                            <div class="caption">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              
                            </div>
                          </div> 
                    </div>
                    <div class="col-xl-3">
                        <figure>
                            <img src="images/coke-tv-advertising.png" class="img-responsive">
                            <figcaption> Yea did maga more</figcaption>
                        </figure>
                        <h2 class="topNews">From our correspondents</h2>
                        <ul class="list-group corrospondents border-top-remov">
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
                        <h2 class="topNews">Most popular</h2>
                        <ul class="list-group most-popular-list border-top-remov">
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
    <script src="lib//lightslider.js"></script>
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
        
        $(document).ready(function() {
//	    $("#content-slider").lightSlider({
//                loop:true,
//                keyPress:true,
//                thumbItem:9,
//            });
            
            $('#content-slider').lightSlider({
                item: 8,
                loop: true,
                slideMove: 2,
                auto: true,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive : [
                    {
                        breakpoint:800,
                        settings: {
                            item:3,
                            slideMove:1,
                            slideMargin:6,
                          }
                    },
                    {
                        breakpoint:480,
                        settings: {
                            item:2,
                            slideMove:1
                          }
                    }
                ]
            });  
//            $('#image-gallery').lightSlider({
//                gallery:true,
//                item:1,
//                thumbItem:9,
//                slideMargin: 0,
//                speed:500,
//                auto:true,
//                loop:true,
//                onSliderLoad: function() {
//                    $('#image-gallery').removeClass('cS-hidden');
//                }  
//            });
		});
    </script>
    <?php include 'hbtemplate/hbtemplate.php';?>
</body>
</html>