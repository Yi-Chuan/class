<?php 

	// 构造方法  __construct()
	/**
	 * 构造方法就是一个特殊的成员方法
	 * 构造方法不需要成员访问符来调用
	 * 有自己自动执行的场景
	 * 当使用new关键字来实例化对象时就会自动触发
	 * 方法名: __construct()   和类名同名的方法都是构造方法
	 * 作用: 初始化当前这个对象
	 */

	//定义一个类
	class Person
	{
		//成员属性
		public $name;//名字
		public $age;//年龄
		public $sex;//性别
		public $height;//身高

		//构造方法
		public function __construct($name,$age,$sex,$height){
			// echo '我自动触发了';
			//初始化当前对象
			$this->name = $name;
			$this->age = $age;
			$this->sex = $sex;
			$this->height = $height;

		}

		//和类名同名的成员方法也时构造方法
		// public function Person(){
		// 	echo '我和类名同名';
		// }



		//成员方法
		public function chi(){
			echo '吃';
		}

		public function he(){
			echo '喝';
		}

		public function piao(){
			echo '嫖';
		}

		public function chou(){
			echo '抽';
		}
		//自我介绍
		public function intro(){
			$str = '我的名字';
			$str .= $this->name;
			$str .= '我是个'.$this->sex;
			$str .= '我今年芳龄'.$this->age;
			$str .= '我身高'.$this->height;
			echo $str.'<br>';
		}
	
	}

	//实例化对象
	$jiajia = new Person('佳佳',18,'女','175');
	var_dump($jiajia);


	$chun = new Person('春春',19,'男','165');
	var_dump($chun);

 ?>