<?php 
	
	

	class demo
	{	
		public $name;
		public function __construct($a)
		{
			$this->name = $a;
			echo $a.'被创建<br>';
		}

		public function __destruct()
		{
			echo $this->name.'被销毁<br>';
		}
	}
	/*
		a被创建
		b被创建
		a被销毁
		c被创建
		b被销毁
		d被创建
		c被销毁
		d被销毁
	*/
	$a = new demo('a');//1
	var_dump($a);
	// echo '<hr>';
	$a = new demo('b');//2
	var_dump($a);
	// echo '<hr>';
	$a = new demo('c');//1
	var_dump($a);
	// echo '<hr>';
	$a = new demo('d');//2
	var_dump($a);
	// echo '<hr>';
	$a = new demo('e');
	var_dump($a);
	$a = new demo('f');
	var_dump($a)
 ?>