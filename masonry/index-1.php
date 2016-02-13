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
	      <link rel="stylesheet" href="css/style.css"/>
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
                <input id="shortSearchList" type="search" class="form-control" placeholder="search your hot news" aria-describedby="sizing-addon1" autofocus>
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
      </div>
    </div>
  </div>


    <!-- ========================JavaScritp Library collection ============= -->
    <script src="lib/jquery.js"></script>
    <script src="lib/masonry.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/handlebars.js"></script>
    <script src="lib/awesomplete.js"></script>
    <script src="js/script-1.js"></script>
    <?php include 'hbtemplate/hbtemplate.php';?>
</body>
</html>