<?php 

// PHP工程师面试题
// 1. echo count(“abcd”);输出多少？
// 答案：1

// 2. 
// $a=$b=$c=0;
// $a=$b && $c;
// 运行以上代码后$a $b $c 分别是？
// 答案：false、0、0

// 3. PHP打印出前一天的时间，格式是2011-12-29 22:21:21
// 答案：方法一：$now=time()-86400;
// 	   echo date(“Y-m-d H:i:s”,$now);
// 		方法二：echo date(“Y-m-d H:i:s”,strtotime(“-1day”));
// 拓展：
// 	打印下个星期日期：
// 	echo date(“Y-m-d H:i:s”,strtotime(“last  Monday”));


// 4. 请用php的heredoc语法格式输出：hello world！
// 答案：

// 	$v=”hello world”;
// 	$str=<<<EOT
// 	$v
// EOT;
// echo $str;

// 5. $string = "abcdefg",那么$string{4}的值是？
// 答案：e

// 6. 简述echo(),print(),print_r()的区别。
	// 答案：echo（）可以一次输出多个值，多个值之间用逗号分隔。echo是语言结构，而不是真正的函数，因此不能作为表达式的一部分使用。
	// 		print()是一个函数，用来打印一个值，如果字符串成功显示则返回true，否则返回false
	// 		print_r()是一个函数，用来打印一个值，值为字符串或数字进行简单打印，而数组则以括起来的键和值列表形式显示，并以Array开头。
	// 拓展：var_dump()是一个函数，用来显示关于一个或多个表达式的结果信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。

// 7.用PHP写出显示客户端IP与服务器IP的代码。
// 答案：客户端IP：echo $_SERVER[‘REMOTE_ADDR’];或者getenv(‘REMOTE_ADDR’);
// 	  服务器IP： echo $_SERVER[‘SERVER_ADDR’];或者echo getenv(‘SERVER_ADDR’);



// 8、用正则表达式判断$a是否是一个以半角逗号分隔的多个手机号码组成的字符串，是输出yes


// 	$math=“/((\d){11},)+/”；
// 	$str=”12345678901,12345678901”;
// 	if(preg_match($match,$str)){
// 		echo ‘yes’;
// 	}
                                 
// 9. 请定义一个名为MyClass的类，这个类只有一个静态方法justDoIt。
// 	class MyClass {
// 		static function justDoIt(){
// 		}
// 	}

// 10. 只有该类才能访问该类的私有变量吗？
// 答案：不是。可以在类中什么一个方法，通过这个方法返回私有变量，达到访问私有变量的目的。

// 11.	写出你知道的几种设计模式，并用php代码实现其中一种。
// 答案：单态模式、工厂模式、单例模式、生成器模式、代理模式、迭代模式
// 单态模式举例：
// 	class test{
// 	private static $obj=null;
// 	private function __construct(){
// 		echo ‘第一次连接数据库’;
// }
// static function getInstance(){
// 	if(is_null(self::$obj)){
// 		self::$obj=new self();
// 	return self::$obj;
// }
// }
// function query($sql){
// 	echo $sql;
// }
// }

// 12. 打开php.ini中的Safe_mode，会影响哪些函数？
// 答案：chmod()  检查被操作的文件或目录是否与正在执行的脚本有相同的UID（所有者）。另外，不能设置SUID、SGID和sticky bits
//       mkdir()   检查被操作的目录是否与正在执行的脚本有相同的UID（所有者）。
//       touch()   检查被操作的文件是否与正在执行的脚本有相同的UID（所有者）。检查被操作的目录是否与正在执行的脚本有相同的UID（所有者）。
// 	   chown()、chgrp()、chdir()、fopen()、rmdir()、copy()、link()、exec()等  检查被操作的文件或目录是否与正在执行的脚本有相同的UID（所有者）。检查被操作的目录是否与正在执行的脚本有相同的UID（所有者）。



// 13.	请描述如下URL重写规则的用意。
// <IfModule mod_rewrite.c>
// 	RewriteEngine on
// 	RewriteCond %{REQUEST_FILENAME} !-f
// 	RewriteCond %{REQUEST_FILENAME} !-d
// 	RewriteBase /
// 	RewriteRule . /index.php [L]
// </IfModule>
// 答案：将URL地址强制解析为./index.php



// 14.	你会用哪个函数设置当前内容的Content-Type?
// 答案：
// 	//定义编码
// 	header(“Content-type:text/html;charset=utf-8”);
// 	//CSS
// 	header(“Content-type:text/css”);
// 	//JavaScript
// 	header(“Content-type:text/javascript”);
// 	//JPEG Image
// 	header(“Content-type:image/jpeg”);
// 	//GIF Image
// 	header(“Content-type:image/gif”);
// 	//PNG Image
// 	header(“Content-type:image/png”);
// 	//JSON
// 	header(“Content-type:application/json”);
// 	//PDF
// 	header(“Content-type:application/pdf”);
// 	//XML
// 	header(“Content-type:text/xml”);
// 	//ok
// 	header(“HTTP/1.1 200 OK”);
// 	//404头
// 	header(‘HTTP/1.1 404 Not Found’);
// 	//设置地址被永久的重定向
// 	header(‘HTTP/1.1 301 Moved Permanently’);
// 	//转到一个新地址
// 	header(‘Location:http://www.example.org/’);
// 	//文件延迟转向
// 	header(‘Refresh:10;url=http://www.example.org/’);
// 	print ‘You will be redirected in 10 seconds’;
// 	//纯文本格式
// 	header(‘Content-type:text/plain’);

// 15.	Warning: Cannot modify header information - headers already sent by (output started at D:\src\init.php:7) in D:\src\init.php on line 10 通常什么情况下php会报该警告信息？
// 答案：header(‘Content-type:text/html;charset=utf-8’)头之前有任何输出均会出现如下错误。
ob_flush();//冲刷出（送出）输出缓冲区中的内容
flush();//刷新输出缓冲


// 16.	A通过页面输入用户名abc和密码123登录到www.10086.cn，请写出该次请求的HTTP协议报文(包括请求行、消息报头、请求正文)。
// 答案：
// 	post: / HTTP/1.1
// 	host:www.10086.cn
// 	Content-Type:aaplication/x-www-form-urlencoded
// 	User-Agent：Mozilla/5.0(Windows;U;Windows NT 5.1;en-US;rv:1.7.6)
// 	Gocko/20050225 Firefox/1.0.1

请求行 request line
// POST www.10086.cn HTTP/1.1

请求头 request header
// Accept:text/html,application/xhtml+xml,*
// Referer:http://localhost/a.html
// Accept-Language:zh-CN
// User-Agent:Mozilla/5.0(compatible;MSIE 10.0;Windows NT 6.1;WOW64;Trident/6.0;
// KB974487)
// Content-Type:
application/x-www-form-urlencoded
// Accept-Encoding:gzip,deflate
// Host:localhost
// Content-Length:25
// Connection:Keep-Alive

请求体 request body
// username=abc&password=123

// 17. 写一段php代码遍历某个目录下的所有文件和子文件夹。

// 	function scandir($path){
// 	$files=array();
// 	$handle=opendir($path);
// 	if($filename=@readdir($handle)){
// 		if($filename==’.’ || $filename==’..’){
// 			continue;
// 		}
// 		if(is_dir($filename)){
// 			$files[$filename]=scandir($path.’/’.$filename);
// }else{
// 	$files[$filename]=$filename;
// }
// }
// }
// 	return $files;
// }


//1. 定义目录
	$path = "./images";
	
//2. 打开目录
	$resource = opendir($path);

//3. 读取目录
	while($file = readdir($resource)){
		
		//过滤特殊目录
		if("."==$file || ".."==$file){
			continue;
		}
		var_dump($file);
	}

//4. 关闭目录
	closedir($resource);
	
	

// 18.	查看磁盘空间使用率的linux命令是什么？查看有哪些系统进程正在运行命令是什么？监测linux性能（cpu，磁盘io，内存，网络等）都用到哪些命令？
// 答案：df、ps、top

// 19.	linux下终止一个进程用什么命令？打包压缩和解包用什么命令？软连接和硬链接有什么区别？建立软连接的命令是？
// 答案：pkill -9 进程名或kill 进程号、tar zcvf和tar zxvf、、

// 20.	如果要求每隔5分钟执行一次脚本five.php，如何实现？
// 答案：crontab –e 5 * * * * ./five.php

//   ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.
//   set_time_limit(0);//可以设置时间 通过set_time_limit(0)可以让程序无限制的执行下去

//   $interval=60;//每隔1分钟运行
//   do{
//   	slog();
//       //这里是你要执行的代码
//       sleep($interval);//等待5分钟
//   }while(true);


//   function slog()
//   {
//   	$time = date('Y-m-d H:i:s');
	// $str = "执行时间:".$time."\r\n";

	// //文件写入
	// $path = 'test.log';
	// //打开文件
	// $f = fopen($path,'a+');
	// //写入内容
	// fwrite($f,$str);
	// //关闭文件
	// fclose($f);
//   }

// 21.	mysql中varchar的最大长度是多少？用什么类型的字段存储大文本？date和datetime和timestamp什么区别？怎么看数据库中有哪些sql正在执行？
// 答案：65535、text、
// 	date只保留日期，不保留时分秒。
// 	datetime保留日期和时分秒，MySQL检索且以‘YYYY-MM-DD HH:MM:SS’格式显示datetime值，支持的范围是‘1000-01-01 00:00:00’到‘9999-12-31 23:59:59’。
// 	timestamp的格式与datetime相同，但其取值范围小于datetime，
		使用timestamp可以自动地用当前的日期和时间标记INSERT或UPDATE的操作，
		如果有多个timestamp列，只有第一个自动更新。
// 	show processlist;
	
// 22. MySQL数据库的一个表：User
// Name Tel Content Date
// 张三 13333663366 大专毕业 2006-10-11
// 张三 13612312331 本科毕业 2006-10-15
// 张四 021-55665566 中专毕业 2006-10-15

// 写出如下操作的SQL语句：
// (a) 有一新记录(小王 13254748547 高中毕业 2007-05-06)请用SQL语句新增至表中
// (b) 请用sql语句把张三的时间更新成为当前系统时间
// (c) 请写出删除名为张四的全部记录
// 答案：(a)inser into User(Name,Tel,Content,Date) values(“小王”,12354748547,”高中毕业”,”2007-05-06”);
// (b)update User set Date=date(now()) where User=”张三”;
// (c)delete from User where User=”张三”;



 ?>