<?php 

	// echo $_POST['name'];
	//接收ajax发送过来的参数
	$uname = $_POST['name'];
	// $uname = 'yichuan';

	$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');

	$stmt = $pdo->query('select * from user where username = "'.$uname.'"');

	// var_dump($stmt);
	//提取结果
	$res = $stmt->fetch();

	//判断是否可用
	if(empty($res)){
		//为空 证明用户名可以使用
		echo 1;
	}else{
		echo 0;
	}
 ?>