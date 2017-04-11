<?php 

	include '2.php';

	//函数调用
	\one\love();

	//类的使用
	$a = new \one\Demo();
	var_dump($a);

	//常量
	echo \one\LIKE;

	echo '<hr>';
	//define定义的常量不好使
	// echo \one\LOVE;

	echo $str;





 ?>