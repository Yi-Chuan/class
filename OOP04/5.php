<?php 
	/*
		__toString()魔术方法
			当我们直接输出一个对象时,会自动触发 
		作用:
			代替对象进行字符串的操作
	*/

	//定义类
	class Person
	{
		//定义成员属性
		public $name = 'zhangsan';

		//魔术方法
		//在该方法中必须要返回一个字符串
		public function __toString(){
			// echo ' ni hapo';

			return '你尝试输出了一个对象,请打印';
		}

	}

	//实例化对象
	$a = new Person();
	// var_dump($a);

	echo $a;



 ?>