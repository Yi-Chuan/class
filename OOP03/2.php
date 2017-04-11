<?php 

//子类对父类方法的重写
/*
	先调用子类中的同名方法
*/

// 调用父类的方法
	// parent::方法名
	//不能调用被覆盖了的成员属性

//定义一个wifi
define('WIFI',false);

class Phone
{
	public $brand = '普通手机';

	public function call()
	{
		echo '我正在打电话呢';
	}
}

//子类
class SmartPhone extends Phone
{
	// public $brand = '智能手机';

	public function call()
	{
		if(WIFI){
			echo '我正在使用wifi打电话呢';
		}else{
			//调用父类中的方法
			parent::call();
			// 调用父类中的属性
			// echo  parent::brand;//类常量调用方式 no
			// echo parent::$brand;//no
		}
	}
}

$xm = new SmartPhone();

var_dump($xm);

$xm->call();






?>