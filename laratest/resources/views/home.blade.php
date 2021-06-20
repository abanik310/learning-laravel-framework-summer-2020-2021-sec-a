<html>
<head></head>
<body>
    <h1>Welcome Home! {{$name}} </h1>

    <a href='{{route('user.create')}}'> Create User</a> |
    <a href='{{route('user.viewAllUser')}}'> View All Users</a> |
    <a href="/logout"> Logout</a>
    
</body>


</html> 
