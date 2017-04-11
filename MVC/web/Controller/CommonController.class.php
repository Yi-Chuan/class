<?php 

	class CommonController extends Smarty
	{
public function __construct()
{
	//调用父级smarty的构造方法
	parent::__construct();
	//初始化
	$this->template_dir = './View';
	$this->compile_dir = './View_C';
}
	}



 ?>