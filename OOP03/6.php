<?php 

//静态属性是作为该类对象的共有属性存在的

class demo
{
	//属性
	static public $num = 0;

	//方法
	static public function func()
	{
		// $this->num ++;
		// echo $this->num.'<br>';

		self::$num ++;
		echo self::$num.'<br>';
	}
}

$a = new demo();
$a->func();


$b = new demo();
$b->func();




?>