<?php 
//设置一个用户自定义的错误处理函数
set_error_handler('mysole');
function mysole(){}
	/*
	异常:程序猿认为的不正常 就是异常
	try{捕获异常 throw new Exception 抛出异常}catch(Exception $e){处理异常}
	抛出异常 throw new Exception 
		参数 异常信息  异常编号
	*/

try{
	//捕获异常
	$link = mysqli_connect('localhost','root','111');
	// var_dump($link);
	if(!$link){
		//抛出异常
		throw new Exception('数据库链接失败',10010);
	}
	//抛出异常后,下面的代码不在执行
	echo '111';
}catch(Exception $e){
	//异常处理
	// echo '222';
	//获取当前发送异常的文件的绝对路径
	echo $e->getFile().'<br>';
	//获取当前发送异常的行号
	echo $e->getLine().'<br>';
	//获取发生异常的信息
	echo $e->getMessage().'<br>';
	//获取发生异常的编号
	echo $e->getCode().'<br>';
}
	echo '<hr>';
	//异常处理完成后,会继续执行
	echo '333';




 ?>