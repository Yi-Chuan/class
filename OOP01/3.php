<?php 

	//定义一个类
	class Person
	{
		//成员属性
		public $name;//名字
		public $age;//年龄
		public $sex;//性别
		public $height;//身高

		//成员方法
		public function chi(){
			echo '吃';
		}

		public function he(){
			echo '喝';
		}

		public function piao(){
			echo '嫖';
		}

		public function chou(){
			echo '抽';
		}
		//自我介绍
		public function intro(){
			$str = '我的名字';
			$str .= $this->name;
			$str .= '我是个'.$this->sex;
			$str .= '我今年芳龄'.$this->age;
			$str .= '我身高'.$this->height;
			echo $str.'<br>';
		}
		// 测试 $this能不能修改属性
		public function func(){
			// $this->name = '小春';//在类的内部修改属性
			// $this->sanwei = '60,60,60';//添加
			// unset($this->sanwei);//删除
			//在类的内部调用成员方法
			$this->chou();
		}
	}

	//实例化对象
	$jiajia = new Person();


	//添加属性值
	$jiajia->name = '佳佳';
	$jiajia->age = 18;
	$jiajia->sex = '女';
	$jiajia->height='175cm';

	var_dump($jiajia);

	$jiajia->intro();


	//实例化第二个对象
	$chun = new Person();

	//添加属性值
	$chun->name = '春春';
	$chun->age = 19;
	$chun->sex = '男';
	$chun->height='165cm';

	$chun->func();

	var_dump($chun);
	// echo '<br>';
	// $chun->intro();







 ?>