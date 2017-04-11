<?php 
/*
抽象类
在类中如果至少有一个方法 没有方法体,直接分号结束,
	那么这个方法叫抽象方法,要加 abstract 修饰
那么包含抽象方法的类,就必须时抽象类,要加 abstract 修饰
不是抽象类中必须包含抽象方法

作用:
	不能直接实例化对象 不能用
	对子类(实现类)起到约束作用

*/

	abstract class Demo
	{
		//回到过去
		public function hdgq()
		{
			echo '回到明朝当王爷';
		}

		// 活在当下
		public function jbr()
		{
			echo '我是共产主义接班人';
		}

		// 穿越未来
		//抽象方法 没有方法体,直接分号结束
		abstract public function weilai();
	}

	// 实例化对象
	// $a = new Demo();
	// var_dump($a);


	//定义子类去继承抽象类 并实现抽象类中的抽象方法
	//如果子类中没有实现抽象类中的抽象方法,当前这个类还是抽象类
	class A extends Demo
	{
		//在子类中必须要实现抽象类中没有实现的抽象方法
		public function weilai()
		{
			echo '想看看未来老公长什么样';
		}
	}

	 $a = new A();
	 var_dump($a);

	 $a->weilai();







 ?>