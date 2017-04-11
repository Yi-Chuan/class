<?php 
	
	function __autoload($className){
		// echo $className;  one\two\three\Stu => one/two/three/Stu.class.php
		$path = str_replace('\\','/',$className).'.class.php';
		include 'libs/'.$path;
	}
	



	$s = new one\two\three\Stu();
	var_dump($s);




 ?>