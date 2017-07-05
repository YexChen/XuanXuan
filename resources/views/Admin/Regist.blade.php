@extends('AdminLogin')

@section('content')

	<div class = "page-form">
	<div class = "container">
		<form method = "POST" action = "{{ url('/AdminRegist') }}" id = "myregist">
			{{ csrf_field()}}
			<div class = "form-group {{ $errors->has('invitation')?'has-error':''}}">
				<input class = "form-control" id = "invitation" type = "text"  name = "invitation" placeholder="请填写邀请码">
				@if($errors->has('invitation'))
								<span class = "help-block">
									<strong>{{$errors->first('invitation')}}</strong>
								</span>
				@endif
			</div>
			<div class = "form-group {{ $errors->has('email')?'has-error':''}}">
				<input class = "form-control" id = "email" name = "email" type = "text" placeholder="填写你的用户名">
				@if($errors->has('email'))
					<span class = "help-block">
						<strong>{{ $errors->first('email')}}</strong>
					</span>
				@endif
			</div>
			<div class = "form-group {{ $errors->has('password')?'has-error':''}}">
				<input class = "form-control" id = "password" type = "password" placeholder = "填写你的密码" name = "password">
					@if($errors->has('password'))
						<span class = "help-block">
							<strong>{{ $errors->first('password')}}</strong>
						</span>
					@endif
			</div>
			<div class = "form-group {{ $errors->has('password_confirmation')?'has-error':''}}" >
				<input class = "form-control" id = "password-confirm" type = "password" placeholder="请再次填写密码" name = "password_confirmation">
					@if($errors->has('password_confirmation'))
						<span class = "help-block">
							<strong>{{ $errors->first('password_confirmation')}}</strong>
						</span>
					@endif
			</div>
			<button type = submit class = "btn btn-default btn-block">注册起飞！</button>
		</form>
	</div>
</div>

@endsection