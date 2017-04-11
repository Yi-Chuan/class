<?php 
//pdo的夸数据库操作 扩展了解 sqlite

//实例化pdo
$pdo = new PDO('sqlite:./test.db');
// var_dump($pdo);

//发送sql指令
$stmt = $pdo->query('select * from user');


//处理返回结果
$res = $stmt->fetchAll();

var_dump($res);




 ?>