<?php 
	//pdo 参数绑定
//1,实例化PDO
$pdo = new PDO('mysql:host=localhost;dbname=lamp112;charset=utf8;port=3306','root','');

//2,发送预处理指令 prepare 返回一个对象
// $sql = "select * from user where username = ? and password = ?";
// $sql = 'update user set username=?,password=? where id = ?';
$sql = 'insert into user(username,password) values(?,?)';
$stmt = $pdo->prepare($sql);

$user = 'admin';
$pass = 'admin';
$id = '10';

// 3,绑定参数 bindValue  bindParam array()

	//bindValue
	// $stmt->bindValue(1,'admin');
	// $stmt->bindValue(2,'admin');

	// bindParam 注意 该方法中的第二个参数 只能引用传递,不能直接赋值
	// $stmt->bindParam(1,$user);
	// $stmt->bindParam(2,$pass);
	// $stmt->bindParam(3,$id);

	// array 在使用数组绑定参数时,要注意在执行发送时,要把数组传递过去
	$arr = array($user,$pass);
	


//4,执行发送 execute
$stmt->execute($arr); //在使用数组绑定参数时调用形式

// $stmt->execute();


//5,处理返回结果
	//查询
	// $res = $stmt->fetch();
	//返回受影响的行数
	// $res = $stmt->rowCount();

	//查看最后插入的id 用pdo调用
	$res = $pdo->lastInsertId();

var_dump($res);







 ?>