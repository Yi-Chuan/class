<?php 

$pdo = new PDO('mysql:host=localhost;dbname=lamp112;charset=utf8;port=3306','root','');


// 设置结果集大小写
// $pdo->setAttribute(PDO::ATTR_CASE,
PDO::CASE_UPPER);//大写PDO::CASE_UPPER  小写CASE_LOWER 

//设置错误处理模式  
安静的 silent warning警告 exception异常
$pdo->setAttribute
(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);


//设计结果集的提取类型 PDO::FETCH_ASSOC 关联形式 PDO::FETCH_NUM索引形式
// $pdo->setAttribute
(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_OBJ);

$stmt = $pdo->query('select * from user');


$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($res);

var_dump(PDO::FETCH_ASSOC);





 ?>