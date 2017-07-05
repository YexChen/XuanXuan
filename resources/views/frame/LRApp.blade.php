<!DOCTYPE html>
<html>
<head>
	<meta http-equiv = "Content-Type" content = "text/html;charset = UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width;initial-scale=1">
	<!-- 三大主要声明完毕 -->
	<link rel = "stylesheet" href = "/css/bootstrap/bootstrap.min.css">
	<link rel = "stylesheet" href = "/css/bootstrap/ie10-viewport-bug-workaround.css">
	<link rel = "stylesheet/less" type = "text/css" href = "/css/site/LRApp.css">
	<!-- css表加载完毕 -->
	<script src = "/js/jq/jquery.min.js"></script>
	<script src = "/js/bootstrap/bootstrap.min.js"></script>
	<script src = "/js/less/less.min.js"></script>
	<!-- js加载完毕 -->
</head>

	<body>
		<div class = "page-wrapper">
			@include('shared.LoginNavbar')

			@yield('content')
			<div class = "page-foot">
				<lead>This page is powered by <a href = "http://www.getbootstrap.com">BootStrap</a></lead>
			</div>
		</div>
	</body>
</html>