<?php 

	//一个类只能有一个父类,但是一个类可以实现多个接口

	//接口
	interface AAA
	{
		public function funcA();
	}

	interface BBB
	{
		public function funcB();
	}

	//实现多个接口的'继承'
	class ABC implements AAA,BBB
	{
		//必须实现所有接口中的所有抽象方法
		public function funcA()
		{
			echo 'funcA....';
		}
		public function funcB()
		{
			echo 'funcB....';
		}
		public function funcC()
		{
			echo 'funcC....';
		}
	}

	$abc = new ABC();
	$abc->funcA();
	$abc->funcB();
	$abc->funcC();




 ?>