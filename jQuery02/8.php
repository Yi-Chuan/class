<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');
	
	// if(!empty($_GET['id'])){
	// 	$id = $_GET['id'];
	// 	//执行删除
	// 	$num = $pdo->exec('delete from user where id = '.$id);
	// }else{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$num = $pdo->exec('update user set username = "'.$name.'" where id = '.$id);
	// }

	//判断
	if($num > 0){
		//成功
		echo 1;
	}else{
		//失败
		echo 0;
	}
	







 ?>