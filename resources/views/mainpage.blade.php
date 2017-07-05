<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-type" content = "text/html;charsert = UTF-8">
		<meta http-equiv = "X-UA-compatible" content = "IE=edge">
		<meta name = "viewport" content = "width=device-width,initial-scale=1">
		<!-- 三大声明完毕 -->
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
		<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/mainpage.css')}}">
		<!-- css表导入完毕 -->
		<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
		<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
		<script src = "{{URL::asset('js/bootstrap/holder.min.js')}}"></script>
		<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
		<!-- js脚本导入完毕 -->
	</head>

	<body>
		<div class = "page-wrapper">
			<div class = "navbar navbar-wrapper">
				<nav class = "navbar navbar-static-top ">
					<div class = "container">
						<div class = "navbar-header">
							<p class = "navbar-brand">轩轩博客网</p>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tocollapse" aria-expanded="false" aria-controls="navbar">
							<span class = "icon-bar"></span>
							<span class = "icon-bar"></span>
							<span class = "icon-bar"></span>
							</button>
						</div>
						<div class = "navbar-collapse collapse" id = "tocollapse">
							<ul class = "nav navbar-nav navbar-right">
								<li><a href = "#">栏目1</a></li>
								<li><a href = "#">栏目2</a></li>
								<li class = "dropdown">
									<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">我的<span class = "caret"></span></a>
									@if(Auth::guard('usersguard')->check())
									<ul class = "dropdown-menu ">
										<li><a href = "/userhome">个人中心</a></li>
									</ul>
									@else
									<ul class = "dropdown-menu ">
										<li><a data-toggle = "modal" data-target = "#hiddenModal">个人中心</a></li>
									</ul>
									@endif
								</li>
								<form class = "navbar-form navbar-right">
									<div class = "form-group">
										<input type = "text text-center" class = "form-control" placeholder="Search...">
									</div>
									<button class = "btn btn-default">提交</button>
								</form>
							</ul>
						</div>
					</div>
				</nav>
			</div>
	<!-- 登陆提示框-->
						<div class = "modal fade" id = "hiddenModal">
							<div class = "modal-dialog">
								<div class = "modal-content">
									<div class = "modal-header">
										<button type = "button" class = "close" data-dismiss = "modal"><span>&times;</span></button>
										<h4>提示</h4>
									</div>
									<div class = "modal-body">
									您需要登陆才能发表博客哦~
									</div>
									<div class = "modal-footer">
										<a class = "btn btn-info" type = "button" href = "/userhome">前往登陆</a>
										<button type = "button" class = "btn btn-default" data-dismiss = "modal">取消</button>
									</div>
								</div>
							</div>
						</div>
	<!-- 导航条结束 开始图片轮播 -->
			<div class = "carousel-outer">

				<div class = "carousel slide" id = "carousel1" data-ride = "carousel">
					<!-- 小圆点儿 -->
					<ol class = "carousel-indicators">
						<li data-target = "#carousel1" data-slide-to = "0" class = "active"></li>
						<li data-target = "#carousel1" data-slide-to = "1"></li>
						<li data-target = "#carousel1" data-slide-to = "2"></li>
					</ol>

					<!-- 图片 -->
					<div class = "carousel-inner">
						<div class = "item active item-first">
							<?php $temp1s = App\Models\blogs::orderBy('views','desc')->take(1)->get()?>	<?php $imgpreg = "/<img (.*?) src=\"(.+?)\".*?>/"?>

							<?php $imgr1 = $temp1s[0]->content ?>
							<a href = "/blogs/{{$temp1s[0]->id}}"> 
								<img src = "{{URL::asset('images/1px.png')}}">
							</a>
								<div class = "carousel-caption">
									<h1>
										{{$temp1s[0]->title}}
									</h1>
								</div>
						</div>
						<div class = "item item-second">
							<?php $temp2s = App\Models\blogs::orderBy('views','desc')->take(2)->get()?>
							<a href = "/blogs/{{$temp2s[1]->id}}">
								<img src = "{{URL::asset('images/1px.png')}}">
							</a>
							<div class = "carousel-caption">
								<h1>
										{{$temp2s[1]->title}}
									</h1>
							</div>
						</div>
						<div class = "item item-third">
							<?php $temp3s = App\Models\blogs::orderBy('views','desc')->take(3)->get()?>
							<a href = "/blogs/{{$temp3s[2]->id}}">
								<img src = "{{URL::asset('images/1px.png')}}">
							</a>
							<div class = "carousel-caption">
								<h1>
										{{$temp3s[2]->title}}
							</div>
						</div>
					</div>

					<!-- 滑片 -->
					<a class = "left carousel-control" href = "#carousel1" data-slide = "prev">
						<span class = "glyphicon-chevron-left glyphicon"></span>
					</a>
					<a class = "right carousel-control" href = "#carousel1" data-slide = "next">
						<span class = "glyphicon-chevron-right glyphicon"></span>
					</a>
				</div>
			</div>
			
			<!-- 重点推荐 -->
			<div class = "page-recommend">
				<div class = "container">
					<div class = "row">
						<div class = "col-sm-4">
						<img class = "img-responsive" src = "{{URL::asset('images/arrows1.png')}}" width = "300px">
						</div>
						<div class = "col-sm-4 col-sm-offset-4">
						<a class = "btn btn-info" href = "{{url('/allblogs')}}" >更多博文</a>
						</div>
					</div>
					<div class = "row">
						<div class = "col-sm-4">
							<img data-src = "holder.js/200x200/auto" class = "img-responsive img-circle">
							<lead>图片介绍</lead>
							<p>................</p>
						</div>
						<div class = "col-sm-4">
							<img data-src = "holder.js/200x200/auto" class = "img-responsive img-circle">
							<lead>图片介绍</lead>
							<p>................</p>
						</div>
						<div class = "col-sm-4">
							<img data-src = "holder.js/200x200/auto" class = "img-responsive img-circle">
							<lead>图片介绍</lead>
							<p>................</p>
						</div>
					</div>
					<hr class="featurette-divider">
				</div>
			</div>
			<!--专题A -->
			@include('shared/mainpageTopic',['intro' => 'true','source' => 'images/arrows2.png']); 

			<!--专题B -->
			@include('shared/mainpageTopic',['intro' => 'true','source' => 'images/arrows3.png']); 

			<div class = "page-foot">
			<lead>基于<a href = "http://getbootstrap.com">bootstrap</a>开发的网页,感谢<a href = "http://glyphicons.com">Glyphicon</a>的图标支持
			<a href = "#" class = "right back-to-top"> back to top</a>
			</lead>
		</div>
	</div>
</body>
</html>

			