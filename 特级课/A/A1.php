<?php 

// 1.	php 中字符串可以哪用三种方法定义：      				 (5分)
	// $str = 'iloveyou';
	// $str = "iloveyou";
// $str = <<<ABC
// 	这就是我,不一样的烟火!!!<br>
// 	我就是我,我瞅自己都上火!!!
// ABC;

	
// 2.	定义常量和静态常量的语法是：             				 (5分)
	// define('LOVE','iloveyou');
	// const LIKE = 'ilikeyou';
	// static $var

// 3.	用PHP打印出昨天的时间，格式是 2006-5-10 22:21:21         (5分)
	// date_default_timezone_set('PRC');
	// ini_set('date.timezone','Asia/Shanghai');
	
	// $now = time() - 24*3600;
	// echo date('Y-m-d H:i:s',$now);
	// strtotime() - 将任何英文文本的日期时间描述解析为 Unix 时间戳
	// echo date('Y-m-d H:i:s',strtotime("-1 day"));


// 4.	php和js 计算数组长度的函数和方法分别是：                 (5分)

		// php
		// $arr = [1,2,3];
		// echo count($arr);
		//js  arr.length


// 5.	JS中 为id 是 ”test” 的元素设置样式为 “good”              (5分)
	/*
		document.getElementById('test').setAttribute('class','goods');
	*/

// 6.	开启php错误报告的方法是：                                (5分)
		/*
		当前环境正在使用的php.ini的配置文件中
		display_errors = Off error_reporting = E_ALL

		display_errors = On//关闭
		error_reporting =  E_ALL & ~E_NOTICE

		*/
// 7.	PHP中将对象或者数组序列化的函数是                        (10分)
		/*
			serialize(value);
			onserialize(value);
		*/

// 8.	如何定义对类成员的访问控制：                             (10分)

		// public protected private

// 9.	以下代码在浏览器中输出的结果是：						 (10分)

		// $x = 87;
		// $y = ($x % 7) * 16;
		// $z = $x > $y ? 1 : 0;
		// echo $z; 


// 10.	有一张员工表user[id, name, money]，
// 写出sql语句查询表中money 的最大值                         (5分)
	// SELECT max(money) FROM user 
// 写出sql语句查询money 最多的前10个人，按照money由大到小排序 (5分)
	// select id,name,money  from user  order by money desc limit 10;

// 11.	写一个函数 求两个日期的差数，例如2007-2-5 ~ 2007-3-6 的日期差数(10分)
 
	// 方法一 ：先用strtotime转换成unix时间戳，然后相减，除以 一天的秒数 86400.  
 	/* 
	 	function get_days($date1, $date2)
		{  
	       $time1 = strtotime($date1);  
	       $time2 = strtotime($date2);  
	       return ($time2-$time1)/86400;  
	    }  
    */
    // echo get_days('2007-2-5', '2007-3-6');  

      
    // 方法二 ：先用mktime转换成unix时间戳，然后相减，除以 一 天的秒数 86400.  
  	/*
	  	function get_day($date1,$date2)
	  	{
		    $temp = explode('-', $date1);  
		    $time1 = mktime(0, 0, 0, $temp[1], $temp[2], $temp[0]);  
		    $temp = explode('-', $date2);  
		    $time2 = mktime(0, 0, 0, $temp[1], $temp[2], $temp[0]);  
		    return ($time2-$time1)/86400;
	    }
    */
	// echo get_day('2007-2-5', '2007-3-6');

// 12.	写一个php函数实现从N个整数($a = array(5, 10, 2, 3333, 20);)中找出最大的一个，
	    // 注意：不要使用php的max、sort等函数(10分)
	/*	
		$a = array(5, 10, 2, 3333, 20,9999);
	    function a($arr){
		    $max = null;
		    foreach($arr as $v){
		        if($v > $max){
		          $max = $v;
		        }
		    }
			return $max;
		}
		echo a($a);
	*/

// 13.	有一个100层高的大厦，有一堆材质大小一模一样的石块，
		// 从这个大厦的某一层（临界楼层）仍下，石块就会碎，
		// 使用哪种算法能最快的得到这个临界楼层？(10分)

	/* 分段算法
		将整个大厦的层数分成x段，在这x段中查找那个临界段，
		然后在临界段中再一层一层地找临界层。
		比如可以将大楼分成4段，我们分别在25层、50层、75层投掷棋子，
		以确定临界段；如果临界段在25层到50层，
		我们再从26层开始一层一层查找临界层。
		确定分段数x使棋子投掷的次数最少
	*/




 ?>