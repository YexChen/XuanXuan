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
			@if(Auth::guard('usersguard')->check())
			<ul class = "navbar-nav nav navbar-right">
				<li><a href = "#">欢迎您，{{ Auth('usersguard')->user()->name }}</a></li>
				<li><a href ='/mylogout'>登出</a></li>
			</ul>
			</div>
			@else
			<ul class = "navbar-nav nav navbar-right">
				<li><a href = "{{ url('mylogin')}}" id = "h2s">登陆</a></li>
				<li><a href = "{{ url('myregist')}}">注册</a></li>
			</ul>
			@endif
			</div>
	</div>
</nav>
