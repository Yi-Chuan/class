<?php 

/*
	const 关键字  定义常量
	
	在类的内部定义常量 (也可以在类的外部定义)

	格式:
		const 常量名 = 常量值;
	访问形式:
		在类的外部 类名::常量名  (没有$)
		在类的内部 self::常量名  (没有$)
	区别
								const 		define
		在类的内部定义常量		ok 			  no
		在类的外部定义常量		ok 			  ok
		在流程控制中定义常量	no            ok
		使用变量,函数调用赋值	no            ok
		在使用运算				ok(php5.4不可以) ok
		使用数组                ok            no
*/
// $a = 'iiiiiiiiiii';
	function getage()
	{
		return 21;
	}
	// define('LIKE','ilikeyou');
	// define('LIKE',$a);//ok
	// define('LIKE',getage());//ok
	// define('LIKE',10+10);//ok
	$arr = array(1,2,3);
	// define('LIKE',$arr);//no


	// const LOVE = 'iloveyou';
	// const LIKE = $a;//no
	// const LIKE = getage();//no
	// const LIKE = 10+21;//ok(在php5.4时不能使用运算)
	// const LIKE = [1,2,3];//ok

	// var_dump(LIKE);
	// echo LIKE;
	// echo LOVE;


	// $a = true;
	// if($a){
	// 	// define('LIKE','ilikeyou');
	// 	const LIKE = '2222';
	// }

	// echo LIKE;



		class Demo
		{
			//常量
			// define('LIKE','ilikeyou');//不能在类的内部定义常量
			const LOVE = 'iloveyou';//在类的内部定义常量
			
			//成员属性


			//成员方法
			public function func()
			{
				echo self::LOVE;
			}
		}

		//调用常量
		 echo Demo::LOVE;

		 $a = new Demo();

		 $a->func();








 ?>