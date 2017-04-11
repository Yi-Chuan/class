<?php 
	/*
	类名: Page
		参数:
			数据总条数 100
			每页显示多少 9


		方法:
		1,获取limit参数条件 100 9   0,9  9,9  18,9  n (n-1)*9,9
			getLimit()

		2,显示页码信息
			show();
	*/

	class Page
	{
		//成员属性
		private $total = 0;//总条数
		private $num = 10;//每页显示几条

		//构造方法
		public function __construct($t,$n)
		{
			$this->total = $t;
			$this->num = $n;
		}
		

		//获取limit 参数 1 0,9  9,9  18,9  ...
		public function getLimit()
		{
			//获取当前页
			$p = isset($_GET['p']) ? $_GET['p'] : 1;
			$limit = ($p-1)*$this->num.','.$this->num;
			// echo $limit;
			return $limit;
		}


		//显示页码信息
		public function show()
		{
			//计算总页码数
			$totalPage = ceil($this->total/$this->num);
			//获取当前页
			$p = isset($_GET['p']) ? $_GET['p'] : 1;

            //开始页
            $begin = $p - 4;
            //结束页
            $end = $p + 5;
            #再下面还是一些数据合法性的判断
            if($p<5){
                $begin = 1;
                $end = 10;
            }
            if($p>$totalPage-5){
                $begin = $totalPage - 9;
                $end = $totalPage;
            }
            if($begin<1){
                $begin = 1;
            }
            if($end>$totalPage){
                $end = $totalPage;
            }

			//获取当前页码的url
			$u = $_SERVER['SCRIPT_NAME'];
			//获取当前页面上的其它参数
			$w = '';
			foreach ($_GET as $k => $v) {
				if($k != 'p'){
					$w .= '&'.$k.'='.$v;
				}
			}

			$url = '';
			//首页
			$url .= '<a href="'.$u.'?p=1'.$w.'">首页</a>&nbsp;&nbsp;&nbsp;';
			//上一页
			if($p > 1){
				$url .= '<a href="'.$u.'?p='.($p-1).$w.'">上一页</a>&nbsp;&nbsp;&nbsp;';
			}else{
				$url .= '<a href="'.$u.'?p=1'.$w.'">上一页</a>&nbsp;&nbsp;&nbsp;';
			}

			for ($i=$begin; $i <=$end; $i++) { 
				//判断是否为当前页
				if($p == $i){
					$url .= '<a style="color:red" href="'.$u.'?p='.$i.$w.'">'.$i.'</a>&nbsp;&nbsp;&nbsp;';
				}else{
					$url .= '<a href="'.$u.'?p='.$i.$w.'">'.$i.'</a>&nbsp;&nbsp;&nbsp;';
				}
			}


			//下一页
			if($p >= $totalPage){
				$url .= '<a href="'.$u.'?p='.$totalPage.$w.'">下一页</a>&nbsp;&nbsp;&nbsp;';
			}else{
				$url .= '<a href="'.$u.'?p='.($p+1).$w.'">下一页</a>&nbsp;&nbsp;&nbsp;';
			}

			//尾页
			$url .= '<a href="'.$u.'?p='.$totalPage.$w.'">尾页</a>&nbsp;&nbsp;&nbsp;';


			echo $url;
		}


	}


	//实例化分页类
	$page = new Page(1000,5);
	$page->getLimit();
	$page->show();


 ?>