<?php 
/*
	clone 克隆
		对象属于引用类型,普通的'='赋值 等价于起别名
		类似于 自带 & 取地址符
	__clone 魔术方法
		当执行clone时会自动触发

*/
	
	//定义类
	class Person
	{
		//成员属性
		public $name = 'zhangsan';

		//成员方法
		public function func()
		{
			echo '我叫'.$this->name;
		}

		//__clone()魔术方法 没有任何参数
		public function __clone()
		{
			// echo '我时一个克隆版本';
			$this->name = 'lisi';
		}
	}

	//实例化对象
	$a = new Person();
	var_dump($a);

	//使用clone
	$b = clone $a;
	var_dump($b);

	// $b->name ='lisi';

	// $a->func();



/*======================================================*/


	// $b = $a;//对象属于引用类型,普通的'='赋值 等价于起别名
	// $b->name = 'lisi';
	// // $b->func();
	// $a->func();

	// var_dump($a);
	// var_dump($b);


	//普通的数值传递
	$a = 10;
	$b = $a;
	$b = 20;
	// echo $a;




 ?>