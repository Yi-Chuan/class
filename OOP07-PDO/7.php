<?php 
	
	// PDO 预处理  批量添加数据
	
	//实例化PDO对象
	$pdo = new PDO('mysql:host=localhost;dbname=lamp112;charset=utf8;port=3306','root','');

	//添加
	$sql = 'insert into user(username,password) values(?,?)'; 
	//发送预处理指令
	$stmt = $pdo->prepare($sql);


	//用数组绑定参数
	$arr  = array(
		array('xiaosan','123456'),
		array('xiaosi','123456'),
		array('xiaowu','123456'),
		array('xiaoliu','123456'),
		array('xiaoqi','123456')
		);

	//执行发送 execute()
	$idlist = array();//获取批量插入的数据id
	$rows = 0;//受影响行数
	//遍历
	foreach ($arr as $key => $value) {
		//执行
		$stmt->execute($value);
		$rows += $stmt->rowCount();
		$idlist[] = $pdo->lastInsertId();
	}

	echo '一共插入了'.$rows.'条数据';

	var_dump($idlist);








 ?>