@extends('AdminLogin')

@section('content')

	<div class = "page-form">
	<div class = "container">
		<form method = "POST" action = "{{ url('/AdminLogin') }}" id = "mylogin">
			{{csrf_field()}}
			<div class = "form-group {{ $errors->has('email')?'has-error':''}}">
				<input type = "text" class = "form-control" placeholder="请填写您的邮箱" name = "email" id = "email">
			</div>
				@if($errors->has('email'))
					<span class = "help-block">
						<strong>{{$errors->first('email')}}</strong>
					</span>
				@endif
			<div class = "form-group {{ $errors->has('password')?'has-error':''}}">
				<input type = "password" class = "form-control" placeholder="请填写密码" name = "password" id = "password">
			</div>
				@if($errors->has('password'))
					<span class = "help-block">
						<strong>{{$errors->first('password')}}</strong>
					</span>
				@endif
			<button class = "btn btn-default btn-block" type = "submit">登陆走起!</button>
		</form>
	</div>
	</div> 

@endsection