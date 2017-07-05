<!DOCTYPE html>

<html lang = "zh-CN"><head>
	<meta http-equiv = "Content-Type " content = "text/html; charset = UTF-8;">

	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width = device-width,initial-scale=1">
	<!-- 以上为三个主要标签 -->
	<meta name = "description" content = "交流互联网经验的个人博客">
	<meta name = "author" content = "轩轩">
	<link rel = "icon" href = "http://v3.bootcss.com/favicon.ico">

	<title> 蛇皮旋转网页 </title>

	<!-- bootstrap 核心css -->
	<link href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}" rel = "stylesheet">

	<!-- IE10,IE8 兼容设置 -->
	<link href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}" rel = "stylesheet">

	<!-- 自定义文件 -->
	<link href = "{{ URL::asset('css/carousel/carousel.css')}}" rel = "stylesheet/less">

	<!-- 使用less -->
	<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
  
  <!-- 加载js文件 -->
  <script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
  <script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

  <!-- 加载holder文件 -->
  <script src = "{{URL::asset('js/bootstrap/holder.min.js')}}"></script>
	<!--自定义文件加载完毕 -->

	</head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Carousel 旋转木马部分-->
    <div class = "carousel slide" data-ride= "carousel" id = "myCarousel">
    <!-- 底部小按钮 -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    <!-- 主体 -->
      <div class = "carousel-inner" role = "listbox">
        <div class = "item active">
          <img src = "{{URL::asset('images/1px.png')}}" alt = "This is background" class = "first-slide">
          <div class = "container">
            <div class = "carousel-caption">
              <h1> Example caption </h1>
              <p class = "lead">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
              <p><a class = "btn btn-lg btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class = "item">
          <img src = "{{URL::asset('images/1px.png')}}" alt = "This is background" class = "second-slide">
          <div class = "container">
            <div class = "carousel-caption">
              <h1> Example caption </h1>
              <p class = "lead">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
              <p><a class = "btn btn-lg btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class = "item">
          <img src = "{{URL::asset('images/1px.png')}}" alt = "This is background" class = "third-slide">
          <div class = "container">
            <div class = "carousel-caption">
              <h1> Example caption </h1>
              <p class = "lead">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
              <p><a class = "btn btn-lg btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    <!-- 左右控制器 -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

<!-- 旋转木马结束 -->
<!-- 内容布局开始 -->
  <div class = "container marketing">
      <!-- 三个小圆圈 -->
      <div class = "row">
          <div class = "col-lg-4" >
              <img src = "{{URL::asset('images/1px.png')}}" width = "140px" height = "140px" class = "img-circle">
              <h2>Title</h2>
              <p class = "lead">This line of text is meant to be treated as an addition to the document.</p>
              <a class = "btn btn-default" href = "#">Learn More >> </a>
          </div>
          <div class = "col-lg-4">
              <img src = "{{URL::asset('images/1px.png')}}" width = "140px" height = "140px" class = "img-circle">
              <h2>Title</h2>
              <p class = "lead">This line of text is meant to be treated as an addition to the document.</p>
              <a class = "btn btn-default" href = "#">Learn More >> </a>
          </div>
          <div class = "col-lg-4">
              <img src = "{{URL::asset('images/1px.png')}}" width = "140px" height = "140px" class = "img-circle">
              <h2>Title</h2>
              <p class = "lead">This line of text is meant to be treated as an addition to the document.</p>
              <a class = "btn btn-default" href = "#">Learn More >> </a>
          </div>
      </div>

      <hr class = "featurette-divider">
        <div class = "row style5-7 featurette">
          <div class = "col-lg-7 ">
            <h1 class = "featurette-heading">First featurette heading.<span class = "text-muted">It will blow your head. </span>
            </h1>
            <p class = "lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class = "col-lg-5">
            <img data-src = "holder.js/500x500/auto" alt = "example image" class = "img-responsive featurette-img center-block">
          </div>
        </div>
      
      <hr class = "featurette-divider">
        <div class = "row style5-7 featurette">
          <div class = "col-lg-7 col-lg-push-5">
            <h1 class = "featurette-heading">Next featurette heading.<span class = "text-muted">It will blow your head. </span>
            </h1>
            <p class = "lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class = "col-lg-5 col-lg-pull-7">
            <img data-src = "holder.js/500x500/auto" alt = "example image" class = "img-responsive featurette-img center-block">
          </div>
        </div>
      
      <hr class = "featurette-divider">
        <div class = "row style5-7 featurette">
          <div class = "col-lg-7">
            <h1 class = "featurette-heading">Third featurette heading.<span class = "text-muted">It will blow your head. </span>
            </h1>
            <p class = "lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class = "col-lg-5">
            <img data-src = "holder.js/500x500/auto" alt = "example image" class = "img-responsive featurette-img center-block">
          </div>
        </div>
      
     <hr class = "featurette-divider">
        <div class = "row style5-7 featurette">
          <div class = "col-lg-7 col-lg-push-5">
            <h1 class = "featurette-heading">Last featurette heading.<span class = "text-muted">It will blow your head. </span>
            </h1>
            <p class = "lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class = "col-lg-5 col-lg-pull-7">
            <img data-src = "holder.js/500x500/auto" alt = "example image" class = "img-responsive featurette-img center-block">
          </div>
        </div>

      <hr class = "featurette-divider">
    </div>

    <!-- 页面底端设置 -->
    <div class = "mastfoot container">
    <p class = "left">©2017 Company,Inc. · <a href = "#">Privacy</a> · <a href = "#">Terms</a></p>
    <p class = "pull-right"><a href = "#">Back to top </a></p>
<!-- 页面底部加载js文件 -->
<script src = "{{URL::asset('js/jq/jquery.min.js')"></script>
<script src = "{{URL::asset('js/bootstrap/bootstrap.js')"></script>
</html>