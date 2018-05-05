@extends('layouts.app')
@section('content')
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup form</title>
</head>	
<body>
	@if($alert = Session::get('alert'))
		<div class="alert alert-success alert-block"> {{ $alert }}</div>
	@endif
<h2>Signup form</h2>
	<form action= "{{ route('signup_action.store') }}" method="POST" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<strong>Email</strong> <small class="text-danger"> {{ $errors ->first('email') }} </small> <span id="msg_email">   </span><br>
		
		<input type="text" placeholder="Enter email"   id="email" class="input" name="email" value="{{old('email')}}"><br>


		<strong>Password</strong> <small class="text-danger">{{ $errors ->first('repassword') }} </small> <span id="msg_password">  </span><br>

		
		<input type="password" placeholder="Enter Password"   id="password" class="input" name="password" > <br>

		
		<strong>Repeate password</strong> {{ $errors ->first('repassword') }} <span id="msg_repeatedpassword">  </span> <br>

		
		<input type="password" placeholder="Repeate Password"   id="repeatedpassword" class="input" name="repassword" > <br>

		
		<strong>Fullname</strong> <small class="text-danger"> {{ $errors ->first('user') }} </small> <span id="msg_fullname">  </span><br>

		
		<input type="text" placeholder="Fullname"   id="fullname" class="input" name="name" value="{{old('name')}}"> <br>

		
		<strong>Address(option)</strong> <br>

		
		<input type="text"  placeholder="Address" class="input" id="address" name="address" value="{{old('address')}}"> <br>
		
		
		<p>By creating an account you agree to our <a href="">Terms & Privacy</a></p><br>	
		
		<input type="reset" value="Cancel" class="cancel">
		
		<input type="submit" value="Sign up" class="signup" onClick="return get_data()">
		</div>
	
</form>

</body>

</html>


@endsection