<?php 
	
	//链接数据库
	$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');

	//发送sql
	$stmt =$pdo->query('select * from phone');

	//处理返回结果
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// var_dump($res);
	echo json_encode($res);


 ?>