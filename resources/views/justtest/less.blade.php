<!DOCTYPE html>
<html lang = "zh-CN">
<head>

<title> 轩轩博客网 </title>

<!-- meta 预留区域 -->
<meta http-equiv = "Content-Type " content = "text/html; charset = UTF-8;">


<meta http-equiv="X-UA-compatible" content = "IE=edge">

<meta name = "viewport" content = "width=device-width,initial-scale=1">


<!-- icon 设置 -->
<link rel = "icon" href = "http://v3.bootcss.com/favicon.ico">

<!-- 载入bootstrap核心组件 -->
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">

<!-- 载入ie10兼容插件 -->
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">

<!-- jquery 核心组件 -->
<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>

<!-- bootstrap 核心js -->
<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

<!-- 如有需要可以导入 holder.min.js -->
<!-- <script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script> -->

<!-- 主要插件导入完毕 -->
	
<style>
.blog-masthead{
  -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
          box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
         background-color : #4d4d4d;
         color : #ffffff;
}

.blog-nav-item{
	position : relative;
	display: inline-block;
	padding: 10px;
	font-weight : 500;
	color : #ffffff;
}

.blog-nav-item,
.blog-nav-item:hover,
.blog-nav-item:focus
{
	color : #ffffff;
}

.blog-nav .active:after {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -5px;
  vertical-align: middle;
  content: " ";
  border-right: 5px solid transparent;
  border-bottom: 5px solid;
  border-left: 5px solid transparent;
}

</style>
</head>
	<body>
		<div class="blog-masthead">
      		<div class="container">
        		<nav class="blog-nav">
          			<a class="blog-nav-item active" href="#">Home</a>
          			<a class="blog-nav-item" href="#">New features</a>
          			<a class="blog-nav-item" href="#">Press</a>
          			<a class="blog-nav-item" href="#">New hires</a>
          			<a class="blog-nav-item" href="#">About</a>
        		</nav>
      		</div>
    	</div>
    </body>
</html>