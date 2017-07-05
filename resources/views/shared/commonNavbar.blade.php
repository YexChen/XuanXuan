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
								<li><a href = "/mainpage">主页</a></li>
								<li><a href = "#">栏目2</a></li>
								<li><a href = "#">栏目3</a></li>
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

			<style>


/*导航条设置 */

.navbar-wrapper,
.navbar{
	margin : 0
}

.navbar-header{
	margin : auto;
	vertical-align: center;
}

.nav > li >a,
.nav > li >a:hover,
.nav > li >a:focus{
	color : #333333;
}

.nav > li > a:hover,
.nav > li > a:focus{
	background-color : #f2f2f2;
}

.nav > li,
.collapse > ul > form > .form-group > input,
.collapse > ul > form > button,
.navbar-brand,{
	margin : 10px;
}

.navbar-header > button{
	margin-top : 18px;
}
/* 修改icon-bar 的颜色，不然看不见 */
.icon-bar{
	background-color : black;
}

.form-group > input{
	width : 80%;
	margin : 0 auto;
}


</style>