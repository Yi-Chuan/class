<?php 
	//PDO 的使用,执行

	// 实例化pdo
	$pdo = new PDO('mysql:host=localhost;dbname=lamp112;charset=utf8;port=3306','root','');

	//准备sql
	$sql = 'insert into user(username,passwor) values("wangwu","123456")';

	//执行sql语句 exec返回受影响的行数
	$num = $pdo->exec($sql);

	// 添加操作一般获取最后的id
	$id = $pdo->lastInsertId();
	var_dump($id);

	// 处理返回结果
	// var_dump($num);

	//当执行出现错误时
	// $arr = $pdo->errorInfo();
	// var_dump($arr);




 ?>