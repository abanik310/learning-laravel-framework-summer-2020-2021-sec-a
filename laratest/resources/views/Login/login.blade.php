<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
		{{-- {{csrf_field()}} --}}
		@csrf
	<table>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Submit" name="submit"></td>
		</tr>

	</table>
	</form>
	<a href="/register">Signup</a><br><br>
	{{session('msg')}}
</body>
</html>