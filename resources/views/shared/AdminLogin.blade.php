<nav class = "navbar navbar-default">
	<div class = "container">
		<div class = "navbar-header">
			<p class = "navbar-brand">轩轩博客网</p>
			<button class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar-nav">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			</button>
		</div>
		<div class = "navbar-collapse collapse" id = "navbar-nav">
			@if(Auth::guard('Admin')->check())
			<ul class = "navbar-nav nav navbar-right">
				<li><a href = "#">欢迎您，{{ Auth('Admin')->user()->name }}</a></li>
				<li><a href ='/mylogout'>登出</a></li>
			</ul>
			@else
			<ul class = "navbar-nav nav navbar-right">
				<li><a href = "AdminLogin">登陆</a></li>
				<li><a href = "AdminRegist">注册</a></li>
			</ul>
			@endif
		</div>	
	</div>
</nav>
