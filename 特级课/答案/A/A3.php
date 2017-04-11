<?php 
// 1、__FILE__表示什么意思？ 5分
/*
	__LINE__ 	文件中的当前行号。
	__FILE__ 	文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径），而在此之前的版本有时会包含一个相对路径。
	__DIR__ 	文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增） =
	__FUNCTION__ 	函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。
	__CLASS__ 	类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。类名包括其被声明的作用区域（例如 Foo\Bar）。注意自 PHP 5.4 起 __CLASS__ 对 trait 也起作用。当用在 trait 方法中时，__CLASS__ 是调用 trait 方法的类的名字。
	__TRAIT__ 	Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4 起此常量返回 trait 被定义时的名字（区分大小写）。Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
	__METHOD__ 	类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
	__NAMESPACE__ 	当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。 
*/

// 2、如何获取客户端的IP地址？ 5分

	var_dump($_SERVER['REMOTE_ADDR']);
	var_dump($_SERVER['SERVER_ADDR']);


// 3、写出使用header函数跳转页面的语句 5分
	header("Location: http://www.baidu.com");


// 4、$str是一段html文本，使用正则表达式去除其中的所有js脚本 5分

$str ='<script language="javascript">alert("cc");</script>';
$res = preg_replace("/<script[^>]*?>.*?<\/script>/si","替换内容",$str);
var_dump($res);



// 5、写出将一个数组里的空值去掉的语句 5分
	$arr = array('foo',false,-1,null,'');
             
	foreach($arr as $k=>$v)
	{
		if(!$v){
			unset($arr[$k]);
		}
	}
	var_dump($arr);

	var_dump(array_filter($arr));



// 6、写出获取当前时间戳的函数，及打印前一天的时间的方法(格式：年-月-日 时:分:秒) 5分
	date_default_timezone_set('PRC');
	ini_set('date.timezone','Asia/Shanghai');
	
	$now = time() - 24*3600;
	echo date('Y-m-d H:i:s',$now);
	strtotime() - 将任何英文文本的日期时间描述解析为 Unix 时间戳
	echo date('Y-m-d H:i:s',strtotime("-1 day"));

// 7、写出php进行编码转换的函数 5分
	// mb_convert_encoding — 转换字符的编码
	iconv — 字符串按要求的字符编码来转换


// 8、$str = “1,3,5,7,9,10,20”，使用什么函数可以把字符串str转化为包含各个数字的数组？ 5分
	// $str = "1,3,5,7,9,10,20";
	// $arr = explode(',',$str);
	// var_dump($arr);

// 9、serialize() /unserialize()函数的作用 5分
	// serialize()  序列化/串行化 
	// unserialize()  反序列化/反串行化 


// 10、写出一个函数，参数为年份和月份，输出结果为指定月的天数  5分
	// function getDays($date){
	//     //获取天数
	//     $days=date("t",strtotime($date));
	//     return $days;
	// }
	    
	// //2015 年12 月
	// $date="2015-2";
	// echo getDays($date);
	// 输出结果：31天

	// cal_days_in_month — 该函数返回特定历法中的某年中的某月的天数。 
	// echo cal_days_in_month(CAL_GREGORIAN,'2','2016');

// 11、一个文件的路径为/wwwroot/include/page.class.php，写出获得该文件扩展名的方法 5分

// 12、你使用过哪种PHP的模板引擎？ 5分
	// smarty模板引擎
	// laravel中内置的Blade模板引擎


// 13、请简单写一个类，实例化这个类，并写出调用该类的属性和方法的语句 10分


// 14、本地mysql数据库db_test里已建有表 friend ，数据库的连接用户为root，密码为123
// friend表字段为：id,name,age,gender,phone,email
// 请使用php连接mysql，选择出friend表里age > 20的所有记录打印结果，并统计出查询出的结果总数。（10分）
	/*
	$link = Mysql_connect(“localhost”,”root”,”123”) or die(“数据库连接失败!”);
	Mysql_select_db(“db_test”,$link) or die(“选择数据库失败!”);
	$sql = “select id,name,age,gender,phone,email from friend where age>20”;
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	While($row = mysql_fetch_assoc($result)){
		Echo $row[‘id’];
	*/



// 15、以下有两个表
/*
user表 字段id (int)，name (varchar)
score表 字段uid (int)，subject (varchar) ，score (int)
score表的uid字段与user表的id字段关联
要求写出以下的sql语句
*/
// (1)	在user表里新插入一条记录，在score表里插入与新加入的记录关联的两条记录 （4分）
// (2)	获取score表里uid为2的用户score最高的5条记录 （4分）
// (3)	使用联合查询获取name为“张三”的用户的总分数	（3分）
// (4)	删除name为“李四”的用户，包括分数记录 （3分）
// (5)	清空score表 （3分）
// (6)	删除user表 （3分）
/*

	1). mysql_query(“insert into user(name) values(‘test’)”);
		$id = mysql_insert_id();
		Mysql_query(“insert into score(uid,subjext,score) values(“.$id.”,’english’,’99’)”);
	2).$sql = select uid,sunjext,score from score where uid=2 order by score desc limit 0,5;
	3).select s.score from score s RIGHT JOIN user u ON u.id=s.uid where u.name=’张三;
	4).delete from score where uid in(select id from user where name=’李四’);
		Delete from user where name=’李四’;
	5).delete from score;
	6).drop table user;
*/


 ?>