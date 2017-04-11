<?php 


	$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');

	$stmt = $pdo->query('select * from user');

	$res = $stmt->fetchAll();

	// var_dump($res);

 ?>