<?php 
	include './config.php';
	include './DB.class.php';

	$user = new DB('user');

	$res = $user->find($_GET['id']);
	// var_dump($res);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>信息修改</title>
</head>
<body>
	<form action="action.php?a=edit" method="post">
		用户名:<input type="text" name="username" value="<?php echo $res['username']; ?>">
		<br>
		密码: <input type="password" name="password" value="<?php echo $res['password']; ?>">
		<br>
		邮箱:<input type="email" name="email" value="<?php echo $res['email']; ?>">
		<br>
		<input type="hidden" name="id" value="<?php echo $res['id']; ?>">
		<input type="submit" value="修改">
	</form>
</body>
</html>