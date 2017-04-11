<?php 
	
	// function getage(){
	// 	// return 50;
	// 	// return; //没有指定返回值或者没有return 默认返回null
	// }
	//马常 赵曙光 顾姚飞 10遍 手抄
	// define('LOVE','iloveyou');
	// define('GETAGE',20);
	define('GETAGE',null); //常量的值有五种,四种标量 null

	// echo LOVE;

	// $a = getage();
	// var_dump(GETAGE);
	// echo $a;
	// $a = 10+20;
	// $b = $a;
	// echo $b;
	// echo $a;

	//类会预先加载,实例化对象可以在类的声明之前也可以在之后
	// $a = new MeiNv();
	// var_dump($a);


	//类的定义
	//类名的定义 建议使用驼峰命名法  meinv MeiNv
	class MeiNv
	{
		//特征 ==> 属性(成员属性)
		// 3p修饰符 public(公有的) protected(受保护的) private(私有的)
		public $name = '佳佳';// 名字
		// public $age;// 年龄 初始值可有可无
		// public $age = 10+20;// 年龄 在php5.4之前不能使用运算
		// public $age = $b;//X  在赋值时不能使用变量
		// public $age = getage();//X  在赋值时不能使用函数调用
		public $age = GETAGE;//  在赋值时可有使用常量
		public $sanwei = '85 65 80';// 三围

		//功能 ==> 方法(成员方法 成员函数)
		/*
			在定义成员方法时,
			修饰符可有可无
			参数可有可无
			返回值可有可无
		*/
		//养眼
		public function yangyan(){
			echo '美女真养眼...';
			// return '美女确实养眼...';
		}
		//约会
		function date($someone){
			// echo "美女正在和{$someone}约会呢...";
			echo '美女正在和'.$someone.'约会呢...';
		}

	}

	//实例化对象
	$a = new MeiNv();
	// // $b = new MeiNv();//实例化第二个对象
	var_dump($a);
	// die;
	// echo $a;//对象不能直接echo

	//成员属性的操作 在类的外部
		//  -> 成员访问符
		//获取操作 对象->属性名
		// echo $a->name;
		// echo $a->sanwei;
		// echo $a->height;//如果不存在会报错Notice: Undefined property: MeiNv::$height in D:\w

		//修改
		$a->age = 18;

		//添加
		$a->height = '173cm';

		//删除
		$a->sanwei = null;
		unset($a->sanwei);

	// var_dump($a);
	// var_dump($b);

		//成员方法的调用 在类的外部
		$res = $a->yangyan();
		var_dump($res);
		//对象->方法名();
		$a->date('川哥');




 ?>