<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
<a href="/home"> Back</a> |
<a href="/logout"> Logout</a> 

<h4><u>Create User</u></h4>

	<form method="post">
	<table>
		<tr>
			<td>User name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr>
			<td>Re-Password</td>
			<td><input type="password" name="re-password"></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="create" value="Create"></td>
		</tr>
        

	</table>
	</form>
	

</body>
</html>