<?php 
//类和对象的常用函数
interface Stu{}
interface Stus{}

//定义一个类
class Person implements Stu,Stus
{
	public $name = 'lisi';
	protected $age = 20;
	private $sanwei = '80 65 85';

	public function love(){}
	protected function like(){}
	private function miss(){}
	
	//魔术常量
	public function func()
	{
		//获取当前文件的绝对路径
		echo __FILE__.'<br>';
		//获取当前代码的行号
		echo __LINE__.'<br>';
		//获取当前的函数名
		echo __FUNCTION__.'<br>';
		//获取当前的方法名
		echo __METHOD__.'<br>';
		//获取当前类名
		echo __CLASS__;
	}
}

//实例化对象
	$a = new Person();

	$a->func();

//常用函数
	//检测类是否定义
	$res = class_exists('Person');
	//检测类中的成员属性是否定义
	$res = property_exists('Person','height');
	//检测对象中的成员属性是否定义
	$res = property_exists($a,'sanwei');
	//获取对象中的成员属性列表,只能获取公有的
	$res = get_object_vars($a);
	//获取类中的成员属性列表,只能获取公有的
	$res = get_class_vars('Person');
	//获取类中的方法列表,只能获取公有的
	$res = get_class_methods('Person');
	//获取对象的类名
	$res = get_class($a);
	//返回指定类实现的接口 组成数组
	$res = class_implements('Person');

	// var_dump($res);







 ?>