<?php 
	include '4.php';

	//类的导入
	use \one\Demo;
	use \one\Demo as A;

	// $a = new \one\Demo();//在实例化的类前面加空间名
	// $a = new Demo();
	$a = new A();

	var_dump($a);



 ?>