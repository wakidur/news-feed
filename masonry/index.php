<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>My news feed</title>
        <meta name="keywords" content="javascript, dynamic, grid, layout, jquery plugin, nested grid, metro style"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/bootstrap.css" />
	      <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/awesomplete.css" />
<!--	<link rel="stylesheet" href="css/freewall.css" />-->
	<link rel="stylesheet" href="css/custom.css" />
	<style type="text/css">
	
	</style>
</head>
<body>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">news-list</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WKR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Headlines</a></li>
            <li><a href="#about">Bangladesh</a></li>
            <li><a href="#contact">World</a></li>
            <li><a href="#contact">Crime</a></li>
            <li><a href="#contact">Local</a></li>
            <li><a href="#contact">Technology</a></li>
            <li><a href="#contact">Offbeat</a></li>
            <li><a href="#contact">Weekend</a></li>
            <li><a href="#contact">Reads</a></li>

          </ul>
         
        </div>
      </div>
    </nav>
  <section class="search-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-2">
          <form class="">
              <div class="input-group input-group-lg custome-search-input" >              
                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-search-plus"></i></span>
                <input id="shortSearchList" type="search" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
              </div>
            
            <button type="submit" class="btn btn-default btn-lg custom-submit"><i class="fa fa-arrow-right"></i></button>
        </form>
      </div>
    </div>
  </section>
    
  <div class="container-fluid">
        <div class="">                
            <div id="masonary">
                <div class="grid-sizer"></div>
                <div class="size22 newCatosol newCatosol-height2">
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
                
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/02.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!-- <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">What It's Like When a Dermatologist Gets Skin Cancer</h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables.less: variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22 ">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/03.jpg" alt="The Pulpit Rock" class="img-responsive">
                    <!--    <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">What It's Like When a Dermatologist Gets Skin Cancer</h4>
                           <p class="text-info-news">The typographic scale is based on two Less  We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/04.jpg" alt="The Pulpit Rock" class="img-responsive">
                    <!--    <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">What It's Like When a Dermatologist Gets Skin Cancer</h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables.less: @font-size-base and @line-height-base. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/05.jpg" alt="The Pulpit Rock" class="img-responsive">
                    <!--  <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">What It's Like When a Dermatologist Gets Skin Cancer</h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables.less: @font-size-base and @line-height-base. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/06.jpg" alt="The Pulpit Rock" class="img-responsive">
                    <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">What It's Like When a Dermatologist Gets Skin Cancer</h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables.less: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/07.jpg" alt="The Pulpit Rock" class="img-responsive">
                    <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables.less: @font-size-base and @line-height-base. The first is the base font-size used throughout and the second is the base line-height.  Customize them and Bootstrap adapts.</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/08.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables.less: @font-size-base and @line-height-base. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure class="hover-effect">
                          <a href="" alt="hek">
                            <img src="images/01.jpg" alt="The Pulpit Rock" class="img-responsive">
                            <figcaption class="title">Fig.1 - A view of the pulpit rock in Norway.</figcaption>
                          </a>
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">What It's Like When a Dermatologist Gets Skin Cancer</h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I The typographic scale is based on two Less variables in variables.less: @font-size-base and @line-height-base. The first is the base font-size used throughout and the second is the base line-height..</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class=" size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/05.jpg" alt="The Pulpit Rock" class="img-responsive">
                    <!-- <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">The typographic scale is based on two Less variables in variables</p>
                           <p class="text-protext-primary">Dec 1 2015</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/02.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/09.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/11.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/12.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/13.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/14.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/15.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/16.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/17.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
                <div class="size22">
                    <article class="thumbnail">
                        <figure>
                            <img src="images/07.jpg" alt="The Pulpit Rock" class="img-responsive">
                        <!--   <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>-->
                        </figure>
                        <div class="caption-info">
                            <p class="text-title-type ellipsis-text">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <h4 class="new-title ellipsis-text">A coastal town’s long and stormy relationship with El Nino </h4>
                           <p class="text-info-news">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
                        </div> 
                    </article>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================JavaScritp Library collection ============= -->
    <script src="lib/jquery.js"></script>
    <script src="lib/masonry.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/handlebars.js"></script>
    <script src="lib/awesomplete.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>