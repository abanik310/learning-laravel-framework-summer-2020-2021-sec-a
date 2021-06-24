<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	
	<form method="post">
		
		 @csrf
				  
	<table>
		
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="fname" value="{{old('fname')}}"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="uname" value="{{old('uname')}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{old('email')}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value="{{old('address')}}"></td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="phone_number" value="{{old('phone_number')}}"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="{{old('city')}}"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="country" value="{{old('country')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Submit" name="submit"></td>
		</tr>

	</table>
	</form>
	<a href="/login">Back</a><br><br>
	{{session('msg')}}

	@foreach ($errors->all() as $error)
		{{$error}}<br>
	@endforeach
	
		

</body>
</html>

