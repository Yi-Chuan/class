<?php 
/*
	PHP 接口 interface     implements
	在类中只有抽象方法和常量,(抽象方法不能使用abstract修饰)
	这样的类就可以定义为接口
	
	和抽象类一样,不能直接使用,起到对子类的约束作用


*/
	//接口
	interface Demo
	{
		//常量
		// const LOVE = 'iloveyou';//可以

		// public $name;//X

		//回到过去
		//public function hdgq();
		
		// 活在当下
		public function jbr();
		
		// 穿越未来
		public function weilai();
	}


	// 实例化
	// $a = new Demo();

//定义子类(实现类)来 实现接口
//如果没有完全实现接口中的抽象方法,那么当前类就是一个抽象类
class A implements Demo
{
	//想使用,就必须实现接口中所有的抽象方法
	//回到过去
	
	// 活在当下
	public function jbr()
	{
		echo ' 我实现了方法活在当下';
	}
	
	// 穿越未来
	public function weilai()
	{
		echo ' 我实现了方法穿越未来';
	}
}

//实例化对象

	$a = new A();
	//$a->hdgq();
	$a->jbr();
	$a->weilai();






 ?>