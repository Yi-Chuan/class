<?php 

/*
	继承

	继承的使用场景
		当别人有,自己没有,去继承那个人的,叫一声爹
	继承的使用格式
		class A extends B{}
		当A类继承了B类之后,A;类就拥有了B类中所有的成员属性和成员方法.但是除了私有成员
	访问权限
				public 		protected 		private
	在本类中	ok 				ok 				ok
	在子类中    ok              ok              no
	在类的外部  ok              no              no
	
	子类对父类方的重写(覆盖) 
		如果当子类出现与父类同名的方法的时候
		如果调用该方法 调用的时 子类中的方法
	调用父类中的成员方法
		parent::方法名()

*/

//定义一个手机的类
class Phone
{
	//成员属性
	public $brand;//品牌
	protected $xinghao;//型号
	private $color;//颜色

	//构造方法
	public function __construct($b,$x,$c)
	{
		$this->brand = $b;
		$this->xinghao = $x;
		$this->color = $c;
	}

	//成员方法
	public function call()
	{
		echo '我正在打电话呢,思密达';
	}

	protected function sendMessage()
	{
		echo '我正在发短信呢,思密达';
	}
	private function palyGame()
	{
		echo '我正在玩游戏呢....';
	}
}

//智能手机的类  SmartPhone类属于phone的子类,或派生类.Phone这个类属于它的父类或者基类
class SmartPhone extends Phone
{
	//成员属性

	public $storage = '2g';//内存
	protected $cpu = '高通枭龙';//cpu
	private $pixel = '2000W';//像素

	//构造方法
	public function __construct($b,$x,$c,$storage,$cpu,$pixel)
	{
		//在子类中调用父类中被覆盖了的方法
		parent::__construct($b,$x,$c);

		$this->storage = $storage;
		$this->cpu = $cpu;
		$this->pixel = $pixel;
		
	}


	//成员方法
	public function chat()
	{
		echo '我正在视频聊天呢,思密达';
	}

	protected function playMusic()
	{
		echo '我正在听音乐...';
	}

	private function daohang()
	{
		echo '我正在使用手机导航呢';
	}

	//测试 在子类中测试成员属性和成员方法
	public function ceshi()
	{
		//测试成员属性
			// echo $this->brand; // ok
			// echo $this->xinghao; // ok
			// echo $this->color;// no 私有的
		//测试成员方法
			// $this->call(); // ok
			// $this->sendMessage();// ok
			// $this->palyGame();// no  私有的
	}
}

// $nokia = new Phone('诺基亚','1110','黑色');
// var_dump($nokia);


$chuizi = new SmartPhone('锤子','t2','白色','4G','枭龙3305','1800W');
var_dump($chuizi);

// $chuizi->ceshi();

//测试成员属性
	// echo $chuizi->brand;//父类中 公有的 ok
	// echo $chuizi->xinghao;// 父类中 受保护的  no
	// echo $chuizi->color;// 父类中 私有的 no

//测试成员方法
	// $chuizi->call(); // 父类中的 公有方法  ok
	// $chuizi->sendMessage();// 父类中  受保护的  no
	// $chuizi->palyGame();//父类中 私有的  no



?>