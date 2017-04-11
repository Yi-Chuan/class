<?php 

	//OOP特性: 封装,继承,多态
	/*
	封装:
		就是使用修饰符来修饰成员属性和成员方法,
		最大限度隐藏对象的内部细节,保证对象的完整性和安全性
		封装是进行访问控制,但不是拒绝访问
		ppp
		public 公有的  protected 受保护的 private 私有的
	*/

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
		//测试
		public function ceshi()
		{
			//在类的内部访问成员属性
				// echo $this->name;// √
				// echo $this->age;// √
				// echo $this->sanwei;// √
				//修改
				// $this->age = 20;
				//删除
				// unset($this->sanwei);
			//在类的内部调用成员方法
				// $this->yangyan();// √
				// $this->date();// √
				// $this->kiss();// √
		}
	}

	//实例化对象
	$jiajia = new MeiNv('佳佳',18,'80 65 85');
	// var_dump($jiajia);

	//在类的外部访问成员属性
		 echo $jiajia->name;// √
		// echo $jiajia->age;// X  Fatal error: Cannot access protected property MeiNv::$age 
		// echo $jiajia->sanwei;// X  Fatal error: Cannot access private property MeiNv::$sanwei 
		//修改
		// echo $jiajia->age = 20;// X
		// 删除
		// unset($jiajia->sanwei);// X

	//在类的外部调用成员方法
		// $jiajia->yangyan(); // √
		// $jiajia->date(); // X
		// $jiajia->kiss(); // X

	$jiajia->ceshi();

 //var_dump($jiajia);







 ?>