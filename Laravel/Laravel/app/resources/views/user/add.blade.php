<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户添加</title>
</head>
<body>
	<!-- <form action="/test/insert" method="post"> -->
	<form action="{{url('/test/upload')}}" method="post" enctype="multipart/form-data">
		用户名 <input type="text" name="username" value="{{old('username')}}"><br>
		密码 <input type="password" name="password"><br>
		邮箱 <input type="text" name="email" value="{{old('email')}}">
		<br>
		头像 <input type="file" name="pic">
		<br>
		{{csrf_field()}}
		<input type="submit">
	</form>
</body>
</html>