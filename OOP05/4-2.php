<?php 
/*
	使用 普通类 实现 多态 (不推荐,对子类(实现类)没有约束作用)
		对于同一个方法,传入了不同的对象,实现了不同的效果,这就是多态的表现
*/

	//定义usb接口,让每一个usb设备都遵循这个规范
	class USB
	{
		//只有一个抽象方法 运行
		public function run(){}
	}

	//鼠标设备
	class Mouse extends USB
	{
		public function run()
		{
			echo '鼠标可以使用啦,思密达';
		}
	}

	//键盘设备
	class KeyBoard extends USB
	{
		public function run()
		{
			echo '键盘可以使用啦,思密达';
		}
	}

	//U盘
	class UDisk extends USB
	{
		public function run()
		{
			echo 'u盘可以使用啦,....';
		}
	}


	//声明电脑的类
	class Computer
	{
		//使用usb方法 该方法要求必须时usb接口
		public function start(USB $obj)
		{
			$obj->run();
		}
	}

	//实例化
	$c = new Computer();

	//实例化usb设备
	$m = new Mouse();
	$k = new KeyBoard();
	$u = new UDisk();

	//s使用电脑上的usb
	$c->start($m);
	echo '<br>';
	$c->start($k);
	echo '<br>';
	$c->start($u);
	echo '<br>';


 ?>