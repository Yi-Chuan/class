<?php 
	/*
		自动加载类 魔术函数
			__autoload();
		当实例化一个不存在的类时,自动触发
		并能获取当前的类名
		扩展:
		指定一个函数来实现自动加载
		spl_autoload_register
	*/

	// include './libs/Stu.class.php';
	// require('Stu.class.php');

	//魔术函数
	function __autoload($name)
	{
		echo $name;
		//拼接路径
		$path = './libs/'.$name.'.class.php';
		//检测文件是否存在
		if(file_exists($path)){
			include($path);
		}else{
			die($name.'类加载失败,未找到当前类文件');
		}
	}

	//自定义函数来实现自动加载
	function MyAutoLoad($name)
	{
		// echo $name;
		$path = './libs/'.$name.'.class.php';
		include($path);
	}

	//指定一个函数来实现自动加载 MyAutoLoad
	spl_autoload_register('MyAutoLoad');



	//实例化对象
	$s = new Stu();

	$s->say();




 ?>