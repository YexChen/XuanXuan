<!DOCTYPE html>
<html lang = "zh-CN">
<head>
	<title> 登录页面 </title>
	<meta http-equiv = "Content-Type" content = "text/html;charset = UTF-8;">
	<meta http-equiv = "X-UA-compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale=1">
	<!-- 三大主要设置 -->
	<link rel = "icon" href = "http://v3.bootcss.com/favicon.ico">
	
	<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
	
	<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">

	<link rel = "stylesheet" href = "{{URL::asset('css/test/login.css')}}">
	
	<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>

	<script src = "{{URL::asset('jq/bootstrap/bootstrap.js')}}"></script>

	<!-- 依赖插件注入完毕，如有需要可以引入less -->
</head>

	<body>
		<div class = "container">
			<h2>Please login</h2>
			<form>
				<div class = "form-group">
					<input  id = "account" class = "form-control" type = "email" placeholder= "E-mail address">
				</div>
				<div class = "form-group">
					<input id = "password" class = "form-control" type = "password" placeholder = "Password">
				</div>
				<div class = "checkbox">
				<label>
					<input type = "checkbox">Remember me
				</label>
				</div>
				<div class = "form-group">
					<button class = "submit btn-primary btn-block btn btn-lg">Sign in</button>
				</div>
			</form>
		</div>
	</body>
</html>


