<?php 
	 //1遍
	//定义一个手机的类
	class Phone
	{
		//成员属性
		public $brand = '三星';//品牌
		public $xinghao;//型号
		public $color;//颜色

		//构造方法
		public function __construct($brand,$xinghao,$color)
		{
			//初始化
			$this->brand = $brand;
			$this->xinghao = $xinghao;
			$this->color = $color;
		}

		//成员方法
		public function call()
		{
			echo '我正在打电话呢';
		}

		public function play()
		{
			echo '我正在玩游戏呢,思密达';
		}

		//析构方法
		public function __destruct()
		{
			echo $this->brand.'手机被销毁了<br>';
		}

	}

	// //实例化对象
	// $xiaomi = new Phone('小米','2s','白色');
	// $chuizi = new Phone('锤子','t2','黑色');
	// $sanxing = new Phone('三星','note3','白色');

	// // var_dump($xiaomi);
	// // var_dump($chuizi);
	// // var_dump($sanxing);

	// // unset($chuizi);

	// //获取函数调用时的参数列表
	// function add()
	// {
	// 	$args = func_get_args();
	// 	var_dump($args);
	// }

	// add(1,2,3,45,6,7,8,9);





 ?>