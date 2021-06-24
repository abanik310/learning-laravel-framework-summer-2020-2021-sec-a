<!DOCTYPE html>
<html>
<head>
	<title>View All Users</title>
</head>
<body>
<a href="/home"> Back</a> |
<a href="/logout"> Logout</a> <br><br>

	<h4><u>User Details</u></h4>
	<table border="1">
		<tr>
            <td>ID</td>			
            <td>Name</td>            
            <td>Password</td>			
            <td>Email</td>            
            <td>Type</td>                    

		</tr>
        <tr>
            
			<td>{{$user['id']}}</td>
            <td>{{$user['uname']}}</td>            
			<td>{{$user['password']}}</td>           
            <td>{{$user['email']}}</td>            
            <td>{{$user['type']}}</td>
            
		</tr>
      		
	</table>
	
</body>
</html>