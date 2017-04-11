<?php 

/*
	static 关键字  静态
	可以和ppp修饰符一起来修饰成员属性和成员方法(静态属性,静态方法)
	不需要使用new关键字来实例化对象,就可以直接调用和访问
	访问形式:
		在类的外部  类名::$属性名  类名::方法名()
		在类的内部  self::$属性名  self::方法名()

	在静态方法中不能使用$this关键字
	在静态方法中只能访问静态成员属性和方法
	静态属性是作为该类对象的共有属性存在的

*/

	class Demo
	{
		//成员属性  静态属性
		static public $name = 'zhangsan';
		public $sex = 'aaaa';

		//成员方法 
		static public function func()
		{
			// echo '我时一个方法';
			echo self::$name;
			self::func2();
			//echo $this->name;//不让用$this
			//echo $this->sex;//no
			//echo self::$sex;//在静态方法中不能使用非静态的

			Demo::func2();//也可以使用
		}
		public function func1()
		{
			echo $this->sex;
		}

		static public function func2()
		{
			echo 'func2....';
		}
	}

	// 在类的外部
	// echo Demo::$name;
	Demo::func();

	$a = new Demo();

	$a->func1();

	// $a->func2();//ok
	// echo $a->name;//no




?>