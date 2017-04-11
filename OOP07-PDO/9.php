<?php 
	
	/*
		PDO事物:
			将多条sql操作(增删改) 作为一个操作单元,要么都成功,要么都失败
		事物支持的四大特性 (ACID) 原子性,一致性,隔离性,持久性
	*/ 

	// beginTransaction 开启事物   commit提交事物   rollBack事物回滚

	//创建pdo
	$pdo = new PDO('mysql:host=localhost;dbname=lamp112;charset=utf8;port=3306','root','');
	// var_dump($pdo);
	// die;

try{
	//设置错误处理方法
	$pdo->setAttribute(
	PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);

	// 开启事物
	$pdo->beginTransaction();

	//开始进行sql操作
	$num = $pdo->exec('update user set account = account-2000 where id = 1');
	//判断是否成功
	if($num < 1){
		//失败 执行事物回滚
		throw new PDOException('扣钱失败');
	}

	//开始进行sql操作
	$num1 = $pdo->exec('update user set account = account+2000 where id = 3');
	//判断是否成功
	if($num1 < 1){
		//失败 执行事物回滚
		throw new PDOException('加钱失败');
	}

	
	//都成功
	$pdo->commit();
	echo '交易成功';


}catch(PDOException $e){
	//出现异常
	// echo '出现异常'

	echo $e->getMessage();
	//执行事物回滚
	$pdo->rollBack();
	die('出现错误');
}




	






 ?>