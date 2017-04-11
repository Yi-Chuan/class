<?php 

//PDO 的预处理 ? 占位符

	//接收参数
$user = $_POST['username'];
$pass = $_POST['password'];

//1,实例化PDO
$pdo = new PDO('mysql:host=localhost;dbname=lamp112;charset=utf8;port=3306','root','');

//2,发送预处理指令 prepare 返回一个对象
$sql = "select * from user where username = ? and password = ?";
$stmt = $pdo->prepare($sql);

//3,绑定参数
//bind绑定 value值
$stmt->bindValue(1,$user);
$stmt->bindValue(2,$pass);

//4,执行发送 execute
$stmt->execute();


//5,处理返回结果
$res = $stmt->fetch();

// 判断用户是否存在
if(!empty($res)){
	echo '登录成功';
}else{
	echo '登录失败';
}
 





 ?>