<?php 
   //1遍
	//析构方法

	class Car
	{
		//成员属性
		public $color;
		public $pinpai;


		//构造方法
		public function __construct($color,$pinpai){
			$this->color = $color;
			$this->pinpai = $pinpai;

			echo $this->pinpai.'被创建了<br>';
		}


		//析构方法 析构没有任何参数
		public function __destruct(){
			echo $this->pinpai.'被析构了<br>';
		}
	}

	//实例化
	new Car('黄色','法拉利');

	new Car('红色','保时捷');

	new Car('黑色','玛莎拉蒂');


 ?>