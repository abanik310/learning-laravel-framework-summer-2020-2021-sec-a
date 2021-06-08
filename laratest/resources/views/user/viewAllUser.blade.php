<!DOCTYPE html>
<html>
<head>
	<title>View All Users</title>
</head>
<body>
<a href="/home"> Back</a> |
<a href="/logout"> Logout</a> <br><br>

	<h4><u>User List</u></h4>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>User name</td>
            <td>Password</td>
            <td>Email</td>
            <td>Type</td>
		</tr>

    @foreach ($userlist as $users) 
    
            <tr>
            <td>{{$users[0]}}</td>
			<td>{{$users[1]}}</td>
            <td>{{$users[2]}}</td>
            <td>{{$users[3]}}</td>
            <td>{{$users[4]}}</td>
		</tr>
     @endforeach
      		
	</table>
	
</body>
</html>