<?php 
/*
	对象串行化(序列化) 保存或传输

	串行化和反串行化函数:
	serialize()--串行化 返回一个包含字节流的字符串
	unserialize()--反串行化 把字符串重新变回原来的值

	序列化一个对象将会保存对象的所有变量，但是不会保存对象的方法，只会保存类的名字。
	
	以下两种回用到
		需要在网络中传输
		需要持久化保存时
	魔术方法
		__sleep()
			是执行串行化时自动触发的方法
			注意 sleep方法中需要返回一个数组,
			数组中值时要保存(串行化)的属性名

		__wakeup()
			是在执行反串行化时自动触发,
*/

	class Stu
	{
		//成员属性
		public $name;
		public $sex;
		public $age;

		//构造方法
		public function __construct($n,$s,$a)
		{
			$this->name = $n;
			$this->sex = $s;
			$this->age = $a;
		}

		public function say()
		{
			echo ' 我说话呢';
		}
		//魔术方法
		//方法中
		public function __sleep()
		{
			//返回一个数组,
			return array('name','age');
		}

		public function __wakeup()
		{
			$this->age = 17;
		}

	}

	// 实例化对象

	// $s = new Stu('伊川','男',16);
	// var_dump($s);

	//串行化
	// $str = serialize($s);
	// echo $str;
	/*
		O:3:"Stu":3:{s:4:"name";s:6:"伊川";s:3:"sex";s:3:"男";s:3:"age";i:16;}
		O == 数据类  对象
		3 == 类名的长度
		Stu == 类名
		3 == 属性的个数
		{
			s == 属性名的类型
			4 == 属性名的长度
			name == 属性名
			s == 属性值的类型
			6 == 属性值的长度
			伊川 == 属性值
		}
	*/

	// 把对象串行化的结果存入文件中
		// file_put_contents('a.txt',$str);

	//读取文件
		$str = file_get_contents('a.txt');
		echo $str;

		//执行反串行化
		$obj = unserialize($str);
		var_dump($obj);





 ?>