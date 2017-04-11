<?php 

/*
static 应用
	单态设计模式(单例设计模式)
	在当前脚本中只产生一个该类对象,在同脚本中一个类只能有一个实例化对象存在
	最适合php使用这种设计模式
	
	1.阻止在类的外部使用new关键字来实例化对象
		将构造方法私有化
	2.在类的内部创建一个对象给它
		声明静态方法来实例化对象
	3.把创建的对象存入一个位置,存档,作为依据
		声明静态属性来存放对象


*/

	class demo
	{
		//成员属性 声明静态属性来存放对象
		static public $obj = null;

		//构造方法 将构造方法私有化
		private function __construct()
		{
			echo 'new <br>';
		}
		//声明静态方法来实例化对象
		static public function getObj()
		{
			//检测是否有对象
			if(self::$obj == null){
				$ob = new demo();
				self::$obj = $ob;
			}
			return self::$obj;
		}
		//定义其它的方法 来实现其它功能
		public function func()
		{}
	}

	// $a = new demo();
	// var_dump($a);

	// $b = new demo();
	// var_dump($b);

	$a = demo::getObj();
	$b = demo::getObj();
	$c = demo::getObj();
	var_dump($a);
	var_dump($b);
	var_dump($c);




?>