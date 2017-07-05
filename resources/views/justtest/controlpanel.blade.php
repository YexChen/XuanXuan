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
<link rel = "stylesheet" type = "text/css" href = "{{URL::asset('css/test/controlpanel.css')}}">

<!-- jquery 核心组件 -->
<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>

<!-- bootstrap 核心js -->
<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

<!-- 如有需要可以导入 holder.min.js -->
<!-- <script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script> -->

<!-- 主要插件导入完毕 -->
</head>

<body>
	<!-- 导航条设置 -->
	<nav class = "navbar navbar-collapse navbar-fixed-top">
		<div class = "container-fluid">
			<div class = "navbar-header">
          		<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div class = "navbar-collapse collapse">
				<ul class = "nav navbar-nav navbar-right">
					<li><a href = "#">Dashboard</a></li>
					<li><a href = "#">Settings</a></li>
					<li><a href = "#">Profile</a></li>
					<li><a href = "#">Help</a></li>
				</ul>
				<form class = "navbar-right navbar-form">
					<div class = "form-group">
						<input type = "text" class = "form-control" placeholder = "Search...">
					</div>
				</form>
			</div>
		</div>
	</nav>
	
	<div class = "container-fluid" id = "maincontent">
		<div class = "row">
			<div class = "col-md-2 sidebar">
				<div class = "nav nav-sidebar">
					<ul class = "nav">
						<li><a href = "#" class = "active">Overview</a></li>
						<li><a href = "#">Reports</a></li>
						<li><a href = "#">Analytics</a></li>
						<li><a href = "#">Export</a></li>
					</ul>
				</div>
				<div class = "nav nav-sidebar">
					<ul class = "nav">
						<li><a href = "#" >Nav Item</a></li>
						<li><a href = "#">Nav Item again</a></li>
						<li><a href = "#">One more nav</a></li>
						<li><a href = "#">More navigation</a></li>
					</ul>
				</div>
				<div class = "nav nav-sidebar">
					<ul class = "nav">
						<li><a href = "#" >Nav item again</a></li>
						<li><a href = "#">one more nav</a></li>
						<li><a href = "#">one more nav</a></li>
					</ul>
				</div>
			</div>
			<div class = "col-md-10 col-md-offset-2">
				<h1>Dashboard</h1>
				<hr class = "featurette-divider">
				<div class = "labels">
					<div class = "row">
						<div class = "col-md-3">
							<img src = "{{URL::asset('images/1px.png')}}" class = "img-circle" width = "200px" height = "200px">
							<lead>Label</lead><br>
							<lead><small>Something else</small></lead>
						</div>
						<div class = "col-md-3">
							<img src = "{{URL::asset('images/1px.png')}}" class = "img-circle" width = "200px" height = "200px">
							<lead>Label</lead><br>
							<lead><small>Something else</small></lead>
						</div>
						<div class = "col-md-3" >
							<img src = "{{URL::asset('images/1px.png')}}" class = "img-circle" width = "200px" height = "200px">
							<lead>Label</lead><br>
							<lead><small>Something else</small></lead>
						</div>
						<div class = "col-md-3">
							<img src = "{{URL::asset('images/1px.png')}}" class = "img-circle" width = "200px" height = "200px">
							<lead>Label</lead><br>
							<lead><small>Something else</small></lead>
						</div>
					</div>
				</div>
				<h2>Section title</h2>
				<hr class = "featurette-divider">
				<table class = "table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Header</th>
							<th>Header</th>
							<th>Header</th>
							<th>Header</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1001</th>
							<th>ipsum</th>
							<th>dolor</th>
							<th>sit</th>
						</tr>
						<tr>
							<th>1002</th>
							<th>amet</th>
							<th>consectetur</th>
							<th>adipiscing</th>
							<th>elit</th>
						</tr>
						<tr>
							<th>1002</th>
							<th>amet</th>
							<th>consectetur</th>
							<th>adipiscing</th>
							<th>elit</th>
						</tr>
						<tr>
							<th>1002</th>
							<th>amet</th>
							<th>consectetur</th>
							<th>adipiscing</th>
							<th>elit</th>
						</tr>
						<tr>
							<th>1002</th>
							<th>amet</th>
							<th>consectetur</th>
							<th>adipiscing</th>
							<th>elit</th>
						</tr>
						<tr>
							<th>1002</th>
							<th>amet</th>
							<th>consectetur</th>
							<th>adipiscing</th>
							<th>elit</th>
						</tr>
						<tr>
							<th>1002</th>
							<th>amet</th>
							<th>consectetur</th>
							<th>adipiscing</th>
							<th>elit</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>