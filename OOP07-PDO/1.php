<?php 
	// phpinfo();
/*
	PDO 的基本使用 查询
*/

// 1.实例化PDO对象  参数 1,DSN  2,用户名  3,密码
	//    数据库类型必须小写
$pdo = new PDO('mysql:host=127.0.0.1;dbname=lamp112;charset=utf8;port=3306','root','');
// var_dump($pdo);


//2.发送sql指令 query作查询,返回的是对象  exec作操作 增删改 返回受影响的行数
$stmt = $pdo->query('select * from user');

var_dump($stmt);
// 3.处理返回结果  foreach fetch fetchAll

// 第一种
	// foreach ($stmt as $k => $v) {
	// 	# code...
	// 	var_dump($k);
	// 	var_dump($v);
	// }

// 第二种 提取一条  用query返回的对象调用
// $res = $stmt->fetch();

// 第三种 提取所有 用query返回的对象调用
$res = $stmt->fetchAll();

var_dump($res);







 ?>