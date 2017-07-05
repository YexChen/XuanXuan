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
	<link href = "{{ URL::asset('css/test/cover.css')}}" rel = "stylesheet/less" type = "text/css">
	
	<!--自定义文件加载完毕 -->
	    <script src = "{{URL::asset('js/less/less.min.js')}}"></script>

	</head>

<body>
	<div class = "site-wrapper">
		<div class = "site-wrapper-inner">
			<div class = "cover-container">
				<div class = "masthead">
					<div class = "inner">
						<h3 class = "masthead-brand">Cover</h3>
						<nav>
							<ul class = "masthead-nav nav">
								<li class = "active"><a href = "#">Home</a></li>
								<li><a href = "#"> Features</a></li>
								<li><a href = "#"> Contact </a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class = "inner cover-center">
					<h1 class = "cover-heading">Cover your page.</h1>
					<p class = "lead cover-text">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
					<p class = "lead"> <a class = "btn btn-large btn-default">Learn More</a></p>
				</div>
				
				<div class = "cover-foot">
					<div class = "inner">
						<p>Cover template for <a href = "#"> bootstrap </a>,by<a href = "#">@mdo</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>