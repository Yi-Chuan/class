<?php 
	/*
	类名 Page
		参数 100 9   12ye
			1,数据总条件
			2,每页显示几条

	方法
		1,获取limit条件 0,9 9,9  18,9
		 	getLimit();
		2,显示页码
			show();
	*/

	class Page
	{
		public $total = 0;//总条数
		public $num = 10;//每页显示条数

		//构造方法
		public function __construct($total,$num)
		{
			$this->total = $total;
			$this->num = $num;
		}
		//获取limit条件 100 9  1, 0,9  2 9,9 3 18,9 n (n-1)*9 , 9
		public function getLimit()
		{
			//获取当前页
			$p = isset($_GET['p']) ? $_GET['p'] : 1;
			$limit = ($p-1)*$this->num.','.$this->num;
			// echo $limit;
			return $limit;
		}

		//显示页码 show()
		public function show()
		{
			//计算总页数 
			$totalPage = ceil($this->total/$this->num);
			//获取当前页的绝对路径
			$u = $_SERVER['SCRIPT_NAME'];
			//获取当前页
			$p = isset($_GET['p']) ? $_GET['p'] : 1;
			
			$url = '';
			$url .= '<a href="'.$u.'?p=1">首页</a>&nbsp;&nbsp;';
			//上一页
			if($p > 1){
				$url .= '<a href="'.$u.'?p='.($p-1).'">上一页</a>&nbsp;&nbsp;';
			}else{
				$url .= '<a href="'.$u.'?p=1">上一页</a>&nbsp;&nbsp;';
			}
			//循环页码
			for ($i=1; $i <= $totalPage ; $i++) { 
				if($p == $i){
					$url .= '<a style="color:red" href="'.$u.'?p='.$i.'">'.$i.'</a>&nbsp;&nbsp;&nbsp;';
				}else{
					$url .= '<a href="'.$u.'?p='.$i.'">'.$i.'</a>&nbsp;&nbsp;&nbsp;';
				}
			}
			if($p >= $totalPage){
				$url .= '<a href="'.$u.'?p='.$totalPage.'">下一页</a>&nbsp;&nbsp;';
			}else{
				$url .= '<a href="'.$u.'?p='.($p+1).'">下一页</a>&nbsp;&nbsp;';
			}
			$url .= '<a href="'.$u.'?p='.$totalPage.'">尾页</a>&nbsp;&nbsp;';

			echo $url;
		}
	}

	$page = new Page(100,9);

	$page->show();
	$page->getLimit();






 ?>