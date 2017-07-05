<!DOCTYPE html>
<html>
<head>
<!-- 基本meta-->
<meta http-equiv = "Content-Type" content = "text/html;charset=utf-8">
<meta http-equiv = "X-UA-compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width,initial-scale=1">
<!-- 导入css-->
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
<link rel = "stylesheet/less" type = "text/css" href = "{{URL::asset('css/site/blogsControl.css')}}">
<!-- 导入js-->
<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src = "{{URL::asset('js/less/less.min.js')}}"></script>
</head>

<body>
	<div class = "page-wrapper">
		<div class = "container">
			<div class = "panel panel-default">
				<div class = "panel-heading"><h2>博客系统控制面板</h2></div>
				<div class = "panel-body">
				<table class = "table">
					<thead>
						<tr>
							<th>博客名称</th>
							<th>作者名称</th>
							<th>应用操作</th>
						</tr>
					</thead>
					<tbody>

						@foreach($data as $key => $d)
							<tr>
								<th><a href = "blogs/{!!$d->id!!}">{{$d->title}}</a></th>
								<th><p>
								@foreach($names as $key2 => $d2)
									@if($d2->id == $d->author_id)
								{!!$d2->name!!}
									@endif
								@endforeach
								</p></th>
								<th><a href = "blogs/{!!$d->id!!}">查看</a>|<a href = "blogs/{!!$d->id!!}/delete">删除</a></th>
							</tr>
						@endforeach
					</tbody>
				</table>
				</div>
				<div class = "panel-foot"></div>
			</div>
		</div>
	</div>