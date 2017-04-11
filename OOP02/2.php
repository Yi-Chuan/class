<?php 
	//2遍

	//OOP特性: 封装,继承,多态

	// 定义一个类
	class MeiNv
	{
		//成员属性
		public $name;//名字
		protected $age;//年龄
		private $sanwei;//三围

		//构造方法
		public function __construct($name,$age,$sanwei)
		{
			//初始化
			$this->name = $name;
			$this->age = $age;
			$this->sanwei = $sanwei;
		}

		//成员方法
		public function yangyan()
		{
			echo '美女看起来真养眼';
		}

		//约会
		protected function date()
		{
			echo '美女正在约会呢,思密达';
		}

		//亲吻
		private function kiss(){
			echo '美女正在kiss呢...';
		}

		//提供一个方法进行修改
		public function setAge($a)
		{
			$this->age = $a;
		}

		//提供一个方法进行获取
		public function getAge()
		{
			echo $this->age;
		}
		
	}

	//实例化对象
	$jiajia = new MeiNv('佳佳',18,'80 65 85');

	var_dump($jiajia);

	//通过提供的方法进行年龄赋值
	$jiajia->setAge(20);

	//通过提供的方法 进行年龄获取
	$jiajia->getAge();

	// var_dump($jiajia);






 ?>