<?php 

	//析构方法
		// 当对象在销毁时自动执行
		// 方法名:__destruct()
		// 销毁的几种情况
		//  1,当脚本执行完毕 
		//  2, unset
		//  3,重新赋值
	class Car
	{
		//成员属性
		public $color;
		public $pinpai;


		//构造方法
		public function __construct($color,$pinpai){
			$this->color = $color;
			$this->pinpai = $pinpai;
		}

		//成员方法
		public function zb(){
			echo '拉轰';
		}

		//析构方法 析构没有任何参数
		public function __destruct(){
			echo $this->pinpai.'被析构了<br>';
		}
	}

	//实例化
	$f = new Car('黄色','法拉利');
	$b = new Car('红色','保时捷');
	$m = new Car('黑色','玛莎拉蒂');

	var_dump($f);
	var_dump($b);
	var_dump($m);

	// unset($b);//手动销毁
	// $b = 12;//重新赋值时,原来的对象不存在引用关系 就会自我销毁

 ?>