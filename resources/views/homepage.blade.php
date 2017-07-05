<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv = "Content-Type" content = "text/html;charset = UTF-8">
	<meta http-equiv = "X-UA-compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale=1">

	<!-- 主要前缀加载完毕 -->
	<!-- 开始加载js及css -->
	<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
	<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
	<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/homepage.css')}}">

	<!-- css 加载完毕，开始加载less,jq,bs等组件-->
	<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
	<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
	<script src = "{{URL::asset('js/less/less.min.js')}}"></script>

	<!-- 主要组件加载完毕 -->
	</head>

	<body>
		<div class = "page-wrapper">
			<div class = "navbar clearfix">
				<div class = "inner">
				<p class = "lead navbar-header">轩轩博客网</p>
				<ul class = "navbar-li nav">
					<li class = "active"><a href = "mainpage">主页</a></li>
					<li><a href = "#">博客</a></li>
					<li><a href = "#">我的</a></li>
				</ul>
				</div>
			</div>
			
			<div class = "container page-center clearfix">
				<h2>欢迎来到轩轩博客网</h2>
				<p>为大家提供一个完全自由的互联网平台,欢迎各方道友，愤青，中二青年入坑讨论</p>
				<button class = "btn btn-default btn-lg">查看更多</button>
			</div>

			<div class = "container page-bottom">
				<lead>Powered by <a href = "http://getbootstrap.com/">BootStrap</a></lead>
			</div>
		</div>
	</body>