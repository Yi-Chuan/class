<?php 


//类的定义
class MeiNv
{
	//成员属性
	public $name = '佳佳';
	public $age = 20;
	public $height = '175cm';

	//成员方法
	public function date(){
		// echo '我约会呢...';
		return '我约会呢...';
	}

	//自我介绍
	public function intro(){

		//$this 关键字
		/*
			this 单词本身就是 这个 的意思
			$this在成员方法中代表着 当前这个对象
			谁调用了成员方法 ,$this就代表这个对象
		*/
		// echo $this->name;
		//var_dump($this);
		// echo $jiajia->name;//不能直接使用外部的对象

		//自我介绍
		$str = '我叫'.$this->name.',我今年'.$this->age.'了,我身高'.$this->height.',我在做'.$this->date();

		echo $str;
	}

}

//实例化对象
$jiajia = new MeiNv();

$jiajia->intro();

echo '<hr>';

$a = new MeiNv();
$a->intro();

//自我介绍
// $str = '我叫'.$jiajia->name.',我今年'.$jiajia->age.'了,我身高'.$jiajia->height.',我在做'.$jiajia->date();

// echo $str;





 ?>