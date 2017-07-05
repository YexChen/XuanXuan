<!DOCTYPE html>

<html lang = "zh-CN"><head>
	<meta http-equiv = "Content-Type " content = "text/html; charset = UTF-8;">

	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width = device-width,initial-scale=1">
	<!-- 以上为三个主要标签 -->
	<meta name = "description" content = "交流互联网经验的个人博客">
	<meta name = "author" content = "轩轩">
	<link rel = "icon" href = "http://v3.bootcss.com/favicon.ico">

	<title> 轩轩博客网主页 </title>

	<!-- bootstrap 核心css -->
	<link href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}" rel = "stylesheet">

	<!-- IE10,IE8 兼容设置 -->
	<link href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}" rel = "stylesheet">

	<!-- 封面自定义文件 -->
<!--	<link href = "{{ URL::asset('css/cover/cover.css')}}" rel = "stylesheet"> -->

	<!-- 加载js文件 -->
	<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
	<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
	<!--自定义文件加载完毕 -->
	</head>

	<body>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="..." alt="...">
      <div class="container">
        <div class = "carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="..." alt="...">
      <div class="container">
        <div class = "carousel-caption">
        </div>
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</body>

</html>
