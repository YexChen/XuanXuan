<!DOCTYPE html>
<html>
<head>
<!-- meta标题设置 -->
<meta http-equiv = "Content-Type" content = "text/html;charset=UTF-8">
<meta http-equiv = "X-UA-compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width;initial-scale=1">
<!-- 导入css文件 -->
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
<link rel = "stylesheet" href = "{{URL::asset('css/summernote/summernote.css')}}">
<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/blogscreate.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<!-- 导入js文件-->
<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
<script src = "http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script src = "{{URL::asset('js/summernote/summernote-zh-CN.js')}}"></script>
</head>

<body>
	<div class = "page-wrapper">
		@include('shared.commonNavbar')
		
		<div class = "mainContent">
			<div class = "container">
				@if(Auth::guard('usersguard')->check())
				<form method = "POST" action = "{{url('postblogs')}}" >
				{{csrf_field()}}
				<div class = "form-group">
					<div class = "container">
						<input type = "text" name = "title" class = "form-control input-lg col-sm-10" placeholder="请填写您的标题" id = "title">
					</div>
				</div>
				<textarea id = "summernote" name = "summernote"></textarea>
					<div class = "btn-group pull-right">
						<button type = "submit" class = "btn btn-info">稍后完成</button>
						<button type = "submit" class = "btn btn-success ">马上发表</button>
					</div>
				</form>
				@else
				<form action = "{{url('postblogs')}}" method = "post">
						{{csrf_field()}}
				<div class = "form-group">
					<div class = "container">
						<input type = "text" name = "title" class = "form-control input-lg col-sm-10" placeholder="请填写您的标题" id = "title">
					</div>
				</div>
				<textarea id = "summernote" name = "summernote"></textarea>
				<div class = "btn-group pull-right">
					<button type = "button" class = "btn btn-info" data-toggle = "modal" data-target = "#hiddenModal">稍后完成</button>
					<button type = "button" class = "btn btn-success " data-toggle = "modal" data-target = "#hiddenModal">马上发表</button>
				</div>
					<!-- modal区域 -->
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
										<button class = "btn btn-info" type = "submit">前往登陆</button>
										<button type = "button" class = "btn btn-default" data-dismiss = "modal">取消</button>
									</div>
								</div>
							</div>
						</div>
				</form>
					@endif
			</div>
		</div>

		<div class = "page-foot">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			<lead>This page is powered by <a href = "http://getbootstrap.com">Bootstrap</a>,<a href = "http://summernote.org">summernote</a></lead>
		</div>
	</div>
</body>
<!-- 部分页尾js-->
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
        	placeholder : '请填写文章内容',
        	height : 300,
        	minHeight : null,
        	maxHeight : null,
        	focus : true,
        	lang : 'zh-CN',
        });
    });
  </script>
</html>


