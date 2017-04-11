-----------------面试题A01----------------------
1.php 中字符串可以哪用三种方法定义：单引号 双引号 定界符(5分)
2.定义常量和静态常量的语法是： static  静态属性  CONST 常量(5分)
3.用PHP打印出昨天的时间，格式是 2006-5-10 22:21:21
	date("Y-m-d",strtotime("-1 day")) (5分)
4.php和js 计算数组长度的函数和方法分别是：
	count  length (5分)
5.JS中 为id 是 ”test” 的元素设置样式为 “good” (5分)
	document.getElementById('test').className='good'  
	$('#test').addClass('good')          
6.开启php错误报告的方法是：(5分)
	开启错误日志-》修改配置文件ini_set("display_errors", "On) 
	设置错误等级error_reporting(E_ALL | E_NOTICE);
7.PHP中将对象或者数组序列化的函数是 (10分)
	serialize() 
8.如何定义对类成员的访问控制：(10分)
	public protected private
9.以下代码在浏览器中输出的结果是：(10分) 
 	>优先级较高 先运算 
10.有一张员工表user[id, name, money],写出sql语句查询表中money 的最大值  (5分)
	select * from user order by money desc  limit 0,1               
写出sql语句查询money 最多的前10个人，按照money由大到小排序 (5分)
	select * from user  order by money desc limit 0,10
11.写一个函数 求两个日期的差数，例如2007-2-5 ~ 2007-3-6 的日期差数(10分)
	strtotime(2007-2-5 )--将指定的日期转化为时间戳
12.写一个php函数实现从N个整数($a = array(5, 10, 2, 3333, 20);)中找出最大的一个，注意：不要使用php的max、sort等函数(10分)
	//思路一： 设置一个临时变量 遍历数组中每一个跟临时变量中的值做比较
	foreach($a as $v){
		if($v>$stmp) $stmp=$v;
	}
	//思路二：冒泡排序
	function paixu($arr){
		$num=0;	//统计循环次数	
		//冒泡排序	
		for($i=0;$i<count($arr)-1;$i++){
			for($j=0;$j<count($arr)-$i-1;$j++){
				// echo $arr[$j].'---'.$arr[$j+1].'<br>';
				if($arr[$j]>$arr[$j+1]){
					//位置对调
					$tmp=$arr[$j];
					$arr[$j]=$arr[$j+1];
					$arr[$j+1]=$tmp;			
				}
				$num++;	
			}
		}
		return $arr;			
	}
	paixu($arr);	
	
13.有一个100层高的大厦，有一堆材质大小一模一样的石块，从这个大厦的某一层（临界楼层）仍下，石块就会碎，使用哪种算法能最快的得到这个临界楼层？(10分)
	思路：二分法（需要有小到大的数组）

-------------------------------------------------------------


---------------------------面试题A02-------------------------

1.用PHP获取当前时间并打印，打印格式：2006-5-10 22:21:21  （5分）
	date('Y-m-d H:i:s',time());
2.字符串转数组 explode()-拆分
  数组转字符串 implode()-链接 
  字符串截取   substr('abcdef',1,2);  //开始位置1 截取两个字符 --输出 bc 
  			   strstr('user@5idev.com','@');	// 输出 @5idev.com		
  字符串替换：
  			  str_replace("world","earth","Hello world!");//输出 Hello earth!
  			  将字符转中的多个字符替换
  			  $arr = array("e", "o");
			  $arr2 = array("x", "y");
			  echo str_replace($arr, $arr2, "Hello World of PHP", $i);	//输出 Hxlly Wyrld yf PHP 
			  echo $i;		// 修改4次 输出4			
  字符串查找
  			  $email = 'yuxiaoxiao@example.com';
		      $domain = strstr($email, '@');// 向后找@example.com
			  $user = strstr($email, '@', true); // 向前找yuxiaoxiao 
  的函数分别是什么?（10分）
	
3.解释一下PHP的类中:protect,public,private,interface,abstract,final,static的含义（7分）

4.写出下列代码的数据结果（5分）
	$date='08/26/2003';
	print ereg_replace(“([0-9]+)/([0-9]+)/([0-9]+)”,2/1/3,$date); 
	将日期号跟月份对调位置 26/08/2003

5.从表login中选出name字段包含admin的前10条结果所有信息的sql语句（3分）
   select * from login where name like '%admin%' limit 0,10	
6.解释:左连接,右连接,内连接,索引（5分）
  左链接 
      select * from A left join B on 条件	
 	  注意:a left join b,并不是说a表的就一定在左边,只是说在查询数据时,以a表为准
  右链接
  	  select * from A right join B on 条件 以B表为主
	  注意：
	  	 既然左右连接可以互换，尽量用左连接，出于移植时兼容性方面的考虑．
	     左右连接是可以互换的(A left join B 等价于 B right join A)
  内联：
  	   select * from A inner join B on 条件  
  索引：
  		优缺点：
  		索引就相当于对指定的列进行排序,排序有利于对该列的查询，可以大大增加查询效率
		建立索引也是要消耗系统资源,所以索引会降低写操作的效率
		类型：主键,唯一,普通,全文
			普通索引：这是最基本的索引类型，而且它没有唯一性之类的限制
			主键索引：必须指定为PRIMARY KEY AUTO_INCREMENT类型的列
		    唯一索引：unique 这种索引和前面的普通索引基本相同,但有一个区别索引列的所有值都只能出现一次，即必须唯一	  
		    全文索引：
		    	1.MYSQL5.6之前表的存储引擎是MyISAM，默认存储引擎InnoDB不支持全文索引
		    	2.MYSQL5.6之后 MyISAM和InnoDB都支持
				3.字段类型：char,varchar,text
	   		         
7.简述论坛中无限分类的实现原理。（5分）

8.写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名
例如: http://www.test.com.cn/abc/de/fg.php?id=1需要取出php或.php（10分）
	$arr = pathinfo('/wwwroot/include/page.class.php');
	echo $path_parts["extension"] . "\n";
	echo $arr['extension'];

9.解释:MVC（10分）
	MVC设计模式 php框架绝大部分都采用这这种设计模式
	通过访问index.php入口文件 携带参数c=user&a=index
	Controller:
		通过c=user来实例化用户控制器
		通过a=index来调用用户的列表模块
	Model：	
		数据的查询使用Model层完成
	View：	
		获取数据在通过模板引擎(smarty blade)将数据发送到模板 模板解析数据完毕返回客户端

10.描述一下大流量高并发量网站的解决方案（5分）

11.如何设计或配置Mysql，才能达到高效使用的目的。（10分）
	1.服务器架构 
		负载均衡->数据库集群
			降低数据数据库的请求压力，提高数据库的效率
		通过binlog日志->主从数据库->将请求细分
			读取操作->主数据库->myisam 
			写入操作->从数据库->innoDB 
    2.表设置
    	1.建立索引 提高单条sql的执行效率
    	2.水平拆分或垂直拆分表 提高表文件的加载效率

12.如何进行防SQL注入（10分）
	
13．用PHP写出一个安全的用户登录系统需要注意哪些方面。（5分）
	前端js检测输入数据是否符合规范，后台插入之前也需要检测
14.使用过哪些PHP框架。试描述其优劣点。（5分）
	ThinkPHP laravel 
	优点：
		模块化开发 开发效率高
		易维护 php开源环境有许多包curl excel email monolog 使用框架可以更方便的使用
		易扩展 项目升级更新大多是修改控制器，在不影响原项目的基础上通过继承关系可实现
	缺点：
		框架结构复杂降低项目运行效率
		可以通过memcache和redias等工具进行缓存优化运行效率

15.用过哪些版本控制工具？（5分）
	git  svn


-----------------------------------------------------------


---------------------------面试题A03--------------------------------	