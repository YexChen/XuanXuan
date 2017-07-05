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

<!-- 自定义博客插件 -->
<link rel = "stylesheet" type = "text/css" href = "{{URL::asset('css/test/blog.css')}}">

<!-- jquery 核心组件 -->
<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>

<!-- bootstrap 核心js -->
<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

<!-- 如有需要可以导入 holder.min.js -->
<!-- <script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script> -->

<!-- 主要插件导入完毕 -->
</head>

<body>

	<div class = "blog-masthead navbar navbar-default navbar-fixed-top">
		<div class = "container">
			<button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			</button>

			<nav id = "navbar" class = "navbar-collapse collapse">
				<ul class = "nav navbar-nav">
					<li class = "active"><a href = "#">Home</a></li>
					<li><a href = "#">New Features</a></li>
					<li><a href = "#">Press</a></li>
					<li><a href = "#">New hires</a></li>
					<li><a href = "#">About</a></li>
				</ul>
			</nav>
		</div>
	</div>
	
	<div class = "container">
		<div class = "blog-head">
			<h1><strong>The Bootstrap Blog</strong></h1>
			<lead>The official example template of creating a blog with Bootstrap.</lead>
		</div>


		<div class = "blog-container">
			<div class = "row">
				<div class = "col-sm-8 ">
					<div class = "text-header">
						<h1>Sample blog post</h1>
							<lead>January 1, 2014 by<a href = "#"> Mark</a></lead>
						<p class = "blog-intro">This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
					</div>
					<hr class = "featurette-divider">
						<p>Cum sociis natoque penatibus et magnis <a href = "#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
					<blockquote>
						<p>Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</blockquote>
						<p>Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
						<h2>Heading</h2>
						<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						<h3>Sub-heading</h3>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						<pre><code>Example code block</code></pre>
						<h2>Sub-heading</h2>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<ul>
							<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
							<li>Donec id elit non mi porta gravida at eget metus.</li>
							<li>Nulla vitae elit libero, a pharetra augue.</li>
						</ul>
					<div class = "buttons">
						<a class = "btn btn-lg btn-primary">Previous</a>
						<a class = "btn btn-lg btn-primary">Next</a>
					</div>
				</div>
				<div class = "col-sm-3 col-sm-offset-1 blog-slider">
					<div class = "slidebar-module sildebar-module-inset">
					<h4>About</h4>
					<p><em>Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</em></p>
					</div>
					<div class = "slidebar-module archieves">
						<h4>Archieves</h4>
						<ol class = "list-unstyled">
						<li><a href = "#">March 2014</a></li>
						<li><a href = "#">February 2014</a></li>
						<li><a href = "#">January 2014</a></li>
						<li><a href = "#">December 2013</a></li>
						<li><a href = "#">November 2013</a></li>
						<li><a href = "#">October 2013</a></li>
						<li><a href = "#">September 2013</a></li>
						<li><a href = "#">August 2013</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

