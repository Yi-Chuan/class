<?php 
	//对象的迭代


class Book
{
	//成员属性
	public $name;//书名
	protected $author;//作者
	private $price;//价格

	//构造方法
	public function __construct($n,$a,$p)
	{
		$this->name = $n;
		$this->author = $a;
		$this->price = $p;
	}
	//成员方法
	public function look()
	{
		echo '我正在学习呢';
	}
}

//实例化对象
$xishuophp = new Book('跟兄弟连学php','高洛峰',100);

//迭代  也有访问权限问题,只能拿到公有的
foreach($xishuophp as $k=>$v)
{
	var_dump($k);
	var_dump($v);
}





 ?>