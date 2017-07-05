<!DOCTYPE html>
<html>
<head>
<!-- 三大meta -->
<meta http-equiv = "Content-Type" content = "text/html;charset=UTF-8">
<meta http-equiv = "X-UA-compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width,initial-scale=1">
<!-- 导入css -->
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
<link rel = "stylesheet" href = "{{URL::asset('css/bootstrap/ie10-viewport-bug-workaround.css')}}">
<link rel = "stylesheet" href = "{{URL::asset('css/site/showblogs.css')}}">
<!-- 导入js -->
<script src = "{{URL::asset('js/jq/jquery.min.js')}}"></script>
<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
</head>


<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       	排序方式
                    </a>
                </li>
                <li>
                    <a href="{{URL::asset('/allblogs/hot')}}">热度排序</a>
                </li>
                <li>
                    <a href="{{URL::asset('/allblogs/new')}}">时间排序</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        	<div class = "container">
        		<div class = "row">
        			<div class = "col-sm-8 col-sm-offset-2">
			            <div class = "panel panel-success">
			            	<div class = "panel-heading">
								<p>博客大全<a class = "pull-right btn btn-success" id = "menu-toggle" href = "#">排序方式</a></p>
			            	</div>
                            @yield('content')
			            </div>
			        </div>
			    </div>
                <div class = "page-foot">
                    <p style = "text-align : center">This page is powered_by <a href = "http://getbootstrap.com">bootstrap</a><a  class = "text-right" href = "mainpage">返回首页</a></p>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>