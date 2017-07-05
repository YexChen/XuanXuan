<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-type" content = "text/html;charset=UTF-8">
		<meta http-equiv = "X-UA-compatible" content = "IE=edge">
		<meta name = "viewport" content = "width=device-width,initial-scale=1">
		<!-- 三大前缀添加完毕 -->
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
		<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
		<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/blogs.css')}}">
		<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
		<!-- css加载完毕 -->
		<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
		<script src = "{{URL::asset('js/bootstrap/bootstrap.js')}}"></script>
		<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
		<script src = "http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
		<script src = "{{URL::asset('js/summernote/summernote-zh-CN.js')}}"></script>
		<!-- js加载完毕 -->
	</head>

	<body>
		<div class = "page-wrapper">
			@include('shared.commonNavbar');
			<div class = "page-center">
				<div class = "container">
					<div class = "row">
						<div class = "col-md-8">
							<h2 class = "blog-title text-left">
								@foreach($data as $key => $d)
									{{$d->title}}
								@endforeach
							</h2>
							<h4 class = "blog-subtitle text-left">
								作者： {{$username->name}}
								<span class = "pull-right">
								日期：
								@foreach($data as $key => $d)
									{{$d->created_at}}
								@endforeach		
								</span>
							</h4>
							<hr class = "featurette-divider">
							<div class = "blog-content">
								@foreach($data as $key => $d)
									{!!$d->content!!}
								@endforeach
							</div>
						<!-- 评论区 -->
						<div class = "comment-area">
						@foreach($comments as $comment)
								<hr class = "divider-dashed">
								<div class = "comment-head">
									<p><span class = "glyphicon glyphicon-user"></span><a href = "#">{{$comment->commenter->name}}</a></p>
									<p><lead><span class = " glyphicon glyphicon-calendar"></span>{{$comment->created_at}}</lead></p>
								</div>
								<span clss = "featurette-divider"></span>
								<div class = "comment-main">
									<p>{!!$comment->content!!}</p>
								</div>
						@endforeach
						</div>
						
						</div>
						<!-- 右侧精选-->
						<div class = "blog-side col-md-2 col-md-offset-2">
							<h2>相关精选</h2>
								<ul class = " list-unstyled">
									<li><a href = "#">某科学的电磁炮</a></li>
									<li><a href = "#">某魔法禁书目录</a></li>
									<li><a href = "#">魔法高校的劣等生</a></li>
									<li><a href = "#">六花的勇者</a></li>
									<li><a href = "#">落地骑士英雄谭</a></li>
									<li><a href = "#">我的妹妹不可能那么可爱</a></li>
									<li><a href = "#">No game no life</a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>

			<div class = "comment-create">
				<div class = "container">
				@if(Auth::guard('usersguard')->check())
					<form action = "/commentCreate/{{$page}}" method = "post">
						{{csrf_field()}}
						<textarea id = "summernote" name = "summernote"></textarea>
						<button class = "btn btn-success" type = "submit">提交评论</button>
					</form>
				@else
					<form action = "/commentCreate/{{$page}}" method = "post">
						{{csrf_field()}}
						<textarea id = "summernote" name = "summernote"></textarea>
						<button type = "button" class = "btn btn-success" data-toggle = "modal" data-target = "#hiddenModal">提交评论
						</button>	
					<!-- modal区域 -->
						<div class = "modal fade" id = "hiddenModal">
							<div class = "modal-dialog">
								<div class = "modal-content">
									<div class = "modal-header">
										<button type = "button" class = "close" data-dismiss = "modal"><span>&times;</span></button>
										<h4>提示</h4>
									</div>
									<div class = "modal-body">
									您需要登陆才能使用评论功能哦~
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
			<p>This page is powered by <a href = "http://getbootstrap.com">Bootstrap</a>,thanks to <a href = "http://glyphicon.com">Glyphicon for icons</a>			<a href = "#" class = "pull-right ">Back to top</a></p>
			</div>
		</div>
	<!-- summernote参数设置-->
	<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        	height : 300,
        	minHeight : null,
        	maxHeight : null,
        	focus : true,
        	lang : 'zh-CN',
        	placeholder : '填写并发表评论~',
        });
    });
  </script>
	</body>
</html>



