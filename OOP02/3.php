<?php 
	//4遍

	//魔术方法 就是自动执行的方法 (有自己的触发场景)
	//music ==> gusic
	/*
		g ==> __get
		u ==> __unset
		s ==> __set
		i ==> __isset
		c ==> __call
	*/

	//定义一个类
	class Person
	{
		//成员属性
		public $name;//名字
		protected $age;//年龄
		private $weight;//体重

		//构造方法
		public function __construct($name,$age,$weight)
		{
			$this->name = $name;
			$this->age = $age;
			$this->weight = $weight;
		}


		//成员方法
		public function say()
		{
			echo '我在聊天呢';
		}

		protected function play($l)
		{
			echo '正在玩'.$l.'呢';
		}

		private function LOL(){
			echo '我正在学习呢';
		}

		//__get 魔术方法
		/*
			触发场景:当对对象中非公有或不存在的成员属性进行获取时会自动触发
			并将属性名作为第一个参数 接收
		*/
		public function __get($name)
		{
			 echo '你尝试获取不存在或非公有的属性:'.$name;
			//echo $this->$name;
		}

		/*
			__unset()
			触发场景:当使用unset对对象中的非公有或不存在成员属性进行销毁时会自动触发
			并将属性名作为第一个参数 接收
		*/
		public function __unset($name)
		{
			echo '你尝试销毁一个不存在或非公有的属性:'.$name;
			// unset($this->$name);
		}

		/*
			__set() 
			触发场景:当对对象中不存在或非公有的成员属性进行赋值时 自动触发
			并将属性名作为第一个参数,属性值作为第二个参数
		*/
		public function __set($name,$value)
		{
			// var_dump($name);
			// var_dump($value);

			$this->$name = $value;
		}

		/*
			__isset()
			触发场景:当对对象中非公有或不存在的成员属性使用isset()或empty()进行检测时,自动触发
			并将属性名作为第一个参数
		*/
		public function __isset($name){
			// 	echo '你尝试检测了不存在或非公有的属性:'.$name;
				// return isset($this->$name);
			// echo $this->$name;
			$res = empty($this->$name);
			// var_dump($res);
			return $res;
		}

		/*
			__call() 针对成员方法
			触发场景:当对对象中不存在或者非公有的成员方法进行调用时,自动触发
			参数:1,调用的方法名
				2,调用时的参数列表
		*/

		public function __call($name,$value)
		{
			var_dump($name);
			var_dump($value);
		}

	}

	//实例化对象
	$nana = new Person('娜娜',20,'55kg');

	var_dump($nana);
	//获取
		echo $nana->name;
		$nana->age;
		$nana->weight;
		 $nana->sanwei;
	//销毁
		unset($nana->age);

	//赋值
		$nana->weight = '60kg';
	//isset empty
		$res = isset($nana->age);

		$res = empty($nana->weight);
		var_dump($res);

		var_dump($nana);
	//方法
		$nana->play('LOL','222');




 ?>