<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content = "text/html;charset=UTF-8">
		<meta http-equiv="X-UA-compatible" content = "IE=edge">
		<meta name = "viewport" content = "width=device-width,initial-scale=1">
	<!-- 三大前缀加载完毕 -->
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
		<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/userhome.css')}}">
	<!-- css 加载完毕 -->
		<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
		<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
		<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
		<script src = "{{URL::asset('js/bootstrap/holder.min.js')}}"></script>

	</head>
	<!-- js文件加载完毕 -->

	<body>
		<div class = "page-wrapper">
			<div class = "page-top">
				<div class = "container">
					<p><strong>现在,你想干点什么呢</strong></p>
				</div>
			</div>
			
			<div class = "bubbles">
				<div class = "row">
					<div class = "col-sm-4 col-centered">
						<img class = "img-responsive img-thumbnail" src = "/images/userhome/1.jpg">
						<p class = "image_bottom"><a href = "/blogscreate">发表博客</a></p>
					</div>
					<div class = "col-sm-4">
						<img class = "img-responsive img-thumbnail" src = "/images/userhome/2.jpg">
						<p class = "image_bottom"><a href = "/allblogs">查看博客</a></p>
					</div>
					<div class = "col-sm-4">
						<img class = "img-responsive img-thumbnail" src = "/images/userhome/3.jpg">
						<p class = "image_bottom">建设中..</p>
					</div>
				</div>
				<div class = "row second-row">
					<div class = "col-sm-4">
						<img class = "img-responsive img-thumbnail" src = "/images/userhome/4.jpg">
						<p class = "image_bottom">建设中..</p>
					</div>
				</div>
			</div>
			<div class = "page-foot">
				<lead>Powered by <a href = "#">Bootstrap</a></lead>
			</div>
		</div>
	</body>
</html>										
