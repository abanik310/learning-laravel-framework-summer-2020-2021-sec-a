<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	
	<form method="post">
		{{-- {{csrf_field()}} --}}
		 @csrf
			<h2>Login Form</h2>	  
	<table>
		
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{old('email')}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Submit" name="submit"></td>
		</tr>

	</table>
	</form>
	<a href="/register">Signup</a><br><br>
	

	@foreach ($errors->all() as $error)
		{{$error}}<br>
	@endforeach
	
	<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>

</body>
</html>

