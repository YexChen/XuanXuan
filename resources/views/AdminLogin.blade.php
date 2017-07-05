<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-type" content = "text/html;charset=UTF-8">
		<meta http-equiv = "X-UA-compatible" content = "IE=edge">
		<meta name = "viewport" content = "width=device-width,initial-scale=1">
		<!-- 三大前缀添加完毕 -->
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
		<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/AdminLogin.css')}}">
		<!-- css加载完毕 -->
		<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
		<script src = "{{URL::asset('js/bootstrap/bootstrap.js')}}"></script>
		<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
		<!-- js加载完毕 -->
	</head>

<body>
	<div class = "page-wrapper">
		@include('shared.AdminLogin')

		@yield('content')


		<div class = "page-foot">
				<lead>This page is powered by <a href = "http://www.getbootstrap.com">BootStrap</a></lead>
		</div>
	</div>
</body>
</html>