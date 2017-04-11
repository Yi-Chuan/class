<?php 
// 1,用PHP获取当前时间并打印，打印格式：2006-5-10 22:21:21  （5分）
	/*
		date('Y-m-d H:i:s');
	
	*/
// 2,字符串转数组,数组转字符串,字符串截取,字符串替换,字符串查找的函数分别是什么?（10分）
	/*
		implode();
		expload();
		substr();
		str_replace();
		strstr();strpos();strrpos();strrchr();

	*/


// 3,解释一下PHP的类中:protected,public,private,interface,abstract,final,static的含义（7分）



// 4, 写出下列代码的数据结果
/*
$date='08/26/2003';
print ereg_replace(“([0-9]+)/([0-9]+)/([0-9]+)”,2/1/3,$date); （5分）
*/
	// $date='08/26/2003';
	// print ereg_replace ("([0-9]+)/([0-9]+)/([0-9]+)","\\2/\\1/\\3",$date);


// 5,从表login中选出name字段包含admin的前10条结果所有信息的sql语句（3分）
	
	//select * from user where name like "%admin" limit 10



// 6,解释:左连接,右连接,内连接,索引（5分）
/*
	左链接：以左边的表为基准查询
	右链接：以右边的表为基准查询
	内连接：两个表共有数据
	例子：   
	-------------------------------------------------
	a表     id   name     		 
			1   张3                   	  
			2   李四                 	 
			3   王武    
	--------------------------------------------------             	
	b表     id   job   parent_id  
			1     23     1 
			2     34     2  
			3     34     4   
	a.id同parent_id   存在关系   
	--------------------------------------------------    
	1） 内连接
	select a.*,b.* from a inner join b on a.id = b.parent_id
	结果是     
	1   张3                   1     23     1   
	2   李四                  2     34     2   

	-----------------------------------------------------
	2）左连接  
	select a.*,b.* from a left join b on a.id = b.parent_id
	结果是     
	1   张3                   1     23     1   
	2   李四                  2     34     2   
	3   王武                  null   

	-----------------------------------------------------
	3） 右连接   
	select a.*,b.* from a right join b on a.id = b.parent_id
	结果是     
	1   张3                   1     23     1   
	2   李四                  2     34     2   
	null                       3     34     4   

	索引       
	·索引在数据库中的作用相当于目录在书籍中的作用类似，
		都用来提高查找信息的速度。       
	·索引是一个表中所包含值的列表，
		其中注明了表中包含各个值的行所在的存储位置，
		使用索引查找数据时，先从索引对象中获得相关列的存储位置，
		然后再直接去其存储位置查找所需信息，
		这样就无需对这个表进行扫描，从而可以快速的找到所需数据。
	*/




// 7,简述论坛中无限分类的实现原理。（5分）
	/*
		设计一张表 通过id(自增主键),pid(父级id) 以及path(路径)来记录
		当前数据的祖父级信息,以及方便子类的记录和查询
		就像windows下新建一个文件夹，在新建的文件夹下又可以新建一个文件夹，
		这样无限循环下去，无限分类也是这样，父类可以分出它子类，
		子类又可以分出它的子类，这样一直无限循环下去。
	   id   title    	   pid   path   	status ...
		1 	 服装 	   		0     0      		1
		2    男装      		1     0,1    		1
		3    女装      		1     0,1    		1
		4    男衬衫      	2     0,1,2    		1
		5    男式花衬衫   	4     0,1,2,4       1   
		6    裙子 		   	3     0,1,3         1    		
	*/



// 8,写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名
// 例如: http://www.test.com.cn/abc/de/fg.php?id=1需要取出php或.php（10分）
	// $url_path = 'http://www.test.com.cn/abc/de/fg.php?id=1';
	// 方法一：
		//取出扩展名及参数
		// $temp = pathinfo($url_path,PATHINFO_EXTENSION);
		//找到扩展名
		// $temp = explode("?",$temp);
		// var_dump($temp);
		// echo $temp[0];
	//方法二：
	//将url路径进行分解，只取出目录之后的信息
		// $temp = parse_url($url_path);
		// $path = $temp['path'];
		// //然后再借用pathinfo直接将扩展名取出
		// echo pathinfo($path,PATHINFO_EXTENSION);
		// echo substr($path,strpos($path,'.')); 
	//方法三：
		//自定义函数提取脚本后缀名
		// getSuffix($url_path);
		// function getSuffix($url)
		// {
		// 	$temp = strrchr($url,'.');
		// 	$temp = explode("?",$temp);
		// 	var_dump($temp[0]);
		// }
		


// 9,解释:MVC（10分）
/*
	MVC全名是Model View Controller，
	是模型(model)－视图(view)－控制器(controller)的缩写，
		M是指业务模型，V是指用户界面，C则是控制器
	是一种软件设计典范(软件设计模式)
	用一种业务逻辑、数据、界面显示分离的方法组织代码，
	将业务逻辑聚集到一个部件里面，在改进和个性化定制界面及用户交互的同时，
	不需要重新编写业务逻辑。

	Model（模型）是应用程序中用于处理应用程序数据逻辑的部分。
	　　通常模型对象负责在数据库中存取数据。
	View（视图）是应用程序中处理数据显示的部分。
	　　通常视图是依据模型数据创建的。
	Controller（控制器）是应用程序中处理用户交互的部分。
	　　通常控制器负责从视图读取数据，控制用户输入，并向模型发送数据。

	MVC是一个经典的设计模式、其中M是数据层、C是控制层、V是视图层。
	我们网站入口访问的是C控制层，
	C通过调度M层将我们所需要的数据检索出来，
	并加载V视图层，然后合成出界面输出给我们。
*/




// 10,描述一下大流量高并发量网站的解决方案（5分）

	/*
		优化SQL语句,数据库优化
		使用缓存技术 memcache
		分库分表
		主从复制
		数据库主从分离,限制大文件的上传及下载,
		缓存,DNS,集群+负载均衡,...
	*/



// 11.如何设计或配置Mysql，才能达到高效使用的目的。（10分）
/*
	1,数据库设计方面，设计结构良好的数据库，允许部分数据冗余。
		选取最适用的字段属性，尽可能把字段设置为NOTNULL，这样在查询的时候，
		数据库不用去比较NULL值。
	
	2,系统架构设计方面，表散列，把海量数据散列到几个不同的表里面，
		集群，数据库读写分离。
	
	优化sql语句,写高效sql语句，以提高效率。
	使用连接(join)来代替子查询
	所得皆必须，只从数据库取必须的数据。
	使用索引
*/



// 12.如何进行防SQL注入（10分）
/*
	1、过滤掉一些常见的数据库操作关键字：select,insert,update,delete,and,*等或者通过系统函 数：addslashes(需要被过滤的内容)来进行过滤。

	2、在PHP配置文件中Register_globals=off;设置为关闭状态 //作用将注册全局变量关闭。比如：接收POST表单的值使用$_POST['user'],如果将register_globals=on;直接使 用$user可以接收表单的值。

	3、SQL语句书写的时候尽量不要省略小引号(tab键上面那个)和单引号

	4、提高数据库命名技巧，对于一些重要的字段根据程序的特点命名，取不易被猜到的

	5、对于常用的方法加以封装，避免直接暴漏SQL语句

	6、开启PHP安全模式Safe_mode=on;

	7、打开magic_quotes_gpc来防止SQL注入 Magic_quotes_gpc=off;默认是关闭的，它打开后将自动把用户提交的sql语句的查询进行转换，把'转为\'，这对防止sql注入有重 大作用。因此开启：magic_quotes_gpc=on;

	8、控制错误信息关闭错误提示信息，将错误信息写到系统日志。

	9、使用mysqli或pdo预处理。

*/




// 13．用PHP写出一个安全的用户登录系统需要注意哪些方面。（5分）

/*
	密码要使用MD5(密码+字符串)进行加密。或者使用laravel中的hash加密方式
	登录表单的名称不要跟数据库字段一样，以免暴漏表字段。
	用户表的表名、字段名、密码尽量用不容易被猜到的。
	要使用验证码验证登陆，以防止暴力破解。
	验证提交的数据是不是来自本网站。
	登录后台处理代码数据库部分使用预处理，做好过滤，防止sql注入。
*/





// 14.使用过哪些PHP框架。试描述其优劣点。（5分）

/*
	1,Laravel是一套简洁、优雅的PHP Web开发框架

	2,ThinkPHP是一个快速、兼容而且简单的轻量级国产PHP开发框架
*/



// 15.用过哪些版本控制工具？（5分）
	// Git 分布式版本控制系统

	// Svn 集中式版本控制系统

?>