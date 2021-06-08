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
            

		</tr>

    @foreach ($userlist as $users) 
    
            <tr>
            <td>{{$users['id']}}</td>
			<td>{{$users['uname']}}</td>
            <td>{{$users['password']}}</td>
            
            <td>
                <a href="/user/details/{{$users['id']}}"> Details</a> |
                <a href="/user/edit/{{$users['id']}}"> Edit</a> |
                <a href="/user/delete/{{$users['id']}}"> Delete</a>
            </td>
		</tr>
     @endforeach
      		
	</table>
	
</body>
</html>