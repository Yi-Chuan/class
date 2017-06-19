<?php 

// 基础题:
// 1.表单中 get与post提交方法的区别?
/*
	get是发送请求HTTP协议通过url参数传递进行接收,
	而post是实体数据,可以通过表单提交大量信息.
 */
// 2.session与cookie的区别?
/* 
	session:储存用户访问的全局唯一变量,
		存储在服务器上的php指定的目录中的（session_dir）的位置进行的存放
    cookie:用来存储连续訪問一个頁面时所使用，是存储在客户端，
    	对于Cookie来说是存储在用户WIN的Temp目录中的。 
    两者都可通过时间来设置时间长短
*/
// 3.数据库中的事务是什么?
/*
	事务（transaction）是作为一个单元的一组有序的数据库操作。
    如果组中的所有操作都成功，则认为事务成功，即使只有一个操作失败，事务也不成功。
    如果所有操作完成，事务则提交，其修改将作用于所有其他数据库进程。
    如果一个操作失败，则事务将回滚，该事务所有操作的影响都将取消。
 */

// 4．	实现不使用第3个变量，交换$a、$b的值，$a、$b的初始值自己定。（3分）


// $a = 150;
// $b = 50;

// $a = $a+$b;
// $b=$a-$b;
// $a=$a-$b;
// echo $a,$b;

// $a = explode(",","$a,$b");	
// $b = $a[0];
// $a = $a[1];
// echo $a,$b;

// 5．	用php打印出前一天的时间格式是2006-5-10 22:21:21 （3分）

// 6．	使用哪些工具进行版本控制（3分）

// 7．	.如何实现字符串翻转？（3分）
    // 答:echo strrev($a);
// 8．	PHP的意思，它能干些什么？（3分）

/*
PHP是一个基于服务端来创建动态网站的脚本语言，您可以用PHP和HTML生成网站主页，英文的全称（Professional  Home Pages）
1、WEB开发、实现订单、网络通信、在线支付、一切互联网可以实现的工作。
2、脚本的开发，Shell 脚本、 windows的计划任务等
3、软件的开发，PHP-GTK等第三方的软件，使用php语法配合其他的语言开发软件
*/

// 9．	谈谈对mvc的认识？（3分）
// 10．GD库是做什么用的?（3分）
// 11．	数据类型(int char varchar datetime text)的意思; 请问varchar和char有什么别？（3分）
// 12．echo(),print(),print_r()的区别？（3分）
/*
  echo是PHP语句, print和print_r是函数,语句没有返回值,函数可以有返回值(即便没有用)  
  print（）    只能打印出简单类型变量的值(如int,string)  
  print_r（） 可以打印出复杂类型变量的值(如数组,对象)  
  echo     输出一个或者多个字符串
*/

// 13．什么是模板技术、能够使HTML和PHP分离开使用的模板？（3分）

// 14．对于大流量的网站,您采用什么样的方法来解决访问量问题?（3分）
  // 确认服务器硬件是否足够支持当前的流量,其次，优化数据库访问。数据库读写分离,优化数据表,
  //   禁止外部的盗链,控制大文件的下载,使用不同主机分流主要流量

// 15．include和require的区别是什么?为避免多次包含同一文件可用什么代替它们?（3分）

    // include_once

// 16．mysql_fetch_row() 和mysql_fetch_array之间有什么区别?（3分）

//    mysql_fetch_row是从结果集取出1行数组,作为枚举
//    mysql_fetch_array是从结果集取出一行数组作为关联数组,或数字数组,两者兼得

// 17．优化MYSQL数据库的方法（3分）

  /*
1、选取最适用的字段属性,尽可能减少定义字段长度,尽量把字段设置NOT NULL,例如'省份,性别',最好设置为ENUM
2、使用连接（JOIN）来代替子查询:
   a.删除没有任何订单客户:DELETE FROM customerinfo WHERE customerid NOT in(SELECT customerid FROM orderinfo)
   b.提取所有没有订单客户:SELECT FROM customerinfo WHERE customerid NOT in(SELECT customerid FROM orderinfo)
   c.提高b的速度优化:SELECT FROM customerinfo LEFT JOIN orderid customerinfo.customerid=orderinfo.customerid
   WHERE orderinfo.customerid IS NULL
3、使用联合(UNION)来代替手动创建的临时表
   a.创建临时表:SELECT name FROM `nametest` UNION SELECT username FROM `nametest2`
4、事务处理:
   a.保证数据完整性,例如添加和修改同时,两者成立则都执行,一者失败都失败
   mysql_query("BEGIN");
   mysql_query("INSERT INTO customerinfo (name) VALUES ('$name1')";
   mysql_query("SELECT * FROM `orderinfo` where customerid=".$id");
   mysql_query("COMMIT");
5、锁定表,优化事务处理:
   a.我们用一个 SELECT 语句取出初始数据，通过一些计算，用 UPDATE 语句将新值更新到表中。
     包含有 WRITE 关键字的 LOCK TABLE 语句可以保证在 UNLOCK TABLES 命令被执行之前，
     不会有其它的访问来对 inventory 进行插入、更新或者删除的操作
   mysql_query("LOCK TABLE customerinfo READ, orderinfo WRITE");
   mysql_query("SELECT customerid FROM `customerinfo` where id=".$id);
   mysql_query("UPDATE `orderinfo` SET ordertitle='$title' where customerid=".$id);
   mysql_query("UNLOCK TABLES");
6、使用外键,优化锁定表
   a.把customerinfo里的customerid映射到orderinfo里的customerid,
     任何一条没有合法的customerid的记录不会写到orderinfo里
   CREATE TABLE customerinfo
   (
     customerid INT NOT NULL,
     PRIMARY KEY(customerid)  
   )TYPE = INNODB;
   CREATE TABLE orderinfo
   (
     orderid INT NOT NULL,
     customerid INT NOT NULL,
     PRIMARY KEY(customerid,orderid),
     FOREIGN KEY (customerid) REFERENCES customerinfo
     (customerid) ON DELETE CASCADE   
   )TYPE = INNODB;
   注意:'ON DELETE CASCADE',该参数保证当customerinfo表中的一条记录删除的话同时也会删除order
         表中的该用户的所有记录,注意使用外键要定义事务安全类型为INNODB;
7、建立索引:
   a.格式:
   (普通索引)->
   创建:CREATE INDEX <索引名> ON tablename (索引字段)
   修改:ALTER TABLE tablename ADD INDEX [索引名] (索引字段)
   创表指定索引:CREATE TABLE tablename([...],INDEX[索引名](索引字段)) 
   (唯一索引)->
   创建:CREATE UNIQUE <索引名> ON tablename (索引字段)
   修改:ALTER TABLE tablename ADD UNIQUE [索引名] (索引字段)
   创表指定索引:CREATE TABLE tablename([...],UNIQUE[索引名](索引字段)) 
   (主键)->
   它是唯一索引,一般在创建表是建立,格式为:
   CREATA TABLE tablename ([...],PRIMARY KEY[索引字段])
8、优化查询语句
   a.最好在相同字段进行比较操作,在建立好的索引字段上尽量减少函数操作
   例子1:
   SELECT * FROM order WHERE YEAR(orderDate)<2008;(慢)
   SELECT * FROM order WHERE orderDate<"2008-01-01";(快)
   例子2:
   SELECT * FROM order WHERE addtime/7<24;(慢)
   SELECT * FROM order WHERE addtime<24*7;(快)
   例子3:
   SELECT * FROM order WHERE title like "%good%";
   SELECT * FROM order WHERE title>="good" and name<"good";
 */

// 18．实现中文字串截取无乱码的方法（3分） mb_substr( )


// 19．用PHP写出显示客户端IP与服务器IP的代码（3分）
   // 打印客户端IP:echo $_SERVER[‘REMOTE_ADDR’]; 或者: getenv('REMOTE_ADDR');
//  打印服务器IP:echo gethostbyname("www.bolaiwu.com")


// 20．有一个网页地址, 比如PHP开发资源网主页: http://www.phpres.com/index.html,如何得到它的内容?（4分）
// 推荐用法 curl
//    方法1(对于PHP5及更高版本):
//    $readcontents = fopen("http://www.phpres.com/index.html", "rb");
//    $contents = stream_get_contents($readcontents);
//    fclose($readcontents);
//    echo $contents;
//    方法2:
//    echo file_get_contents("http://www.phpres.com/index.html"); 

// 21．请说明php中传值与传引用的区别。什么时候传值什么时候传引用?（4分）
/*
  按值传递：函数范围内对值的任何改变在函数外部都会被忽略
    按引用传递：函数范围内对值的任何改变在函数外部也能反映出这些修改
    优缺点：按值传递时，php必须复制值。特别是对于大型的字符串和对象来说，
          这将会是一个代价很大的操作。
    按引用传递则不需要复制值，对于性能提高很有好处。
*/
// 22．请写一个函数验证电子邮件的格式是否正确 （5分）
// function checkEmail($email)
//   {
//     $pregEmail = "/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i";
//     return preg_match($pregEmail,$email);  
//   }

// 23．简述如何得到当前执行脚本路径，包括所得到参数（4分）
// $script_name = basename(__file__);
// print_r($script_name);

// 24．JS表单弹出对话框函数是?获得输入焦点函数是? （3分）
//  弹出对话框: alert(),prompt(),confirm()
//  获得输入焦点 focus()
 
// 25．JS中在函数中又定义了一个函数，最里面的函数是否能够获得外面函数的变量值？为什么？（3分）

// 26．写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名例如: http://www.sina.com.cn/abc/de/fg.php?id=1 需要取出 php 或 .php（5分）

// 27．写一个函数，算出两个文件的相对路径 　　（5分）

// 如 $a = '/a/b/c/d/e.php'; 　　
// $b = '/a/b/12/34/c.php'; 　　
// 计算出 $b 相对于 $a 的相对路径应该是 http://www.cnblogs.com/c/d将()添上
// function getRelativePath($a, $b) {   
// $returnPath = array(dirname($b));   
//   $arrA = explode('/', $a);   
//   $arrB = explode('/', $returnPath[0]);   
//   for ($n = 1, $len = count($arrB); $n < $len; $n++) {   
//       if ($arrA[$n] != $arrB[$n]) {   
//           break;   
//       }    
//   }   
//   if ($len - $n > 0) {   
//       $returnPath = array_merge($returnPath, array_fill(1, $len - $n, '..'));   
//   }   
   
//   $returnPath = array_merge($returnPath, array_slice($arrA, $n));   
//   return implode('/', $returnPath);   
// }   
// echo getRelativePath($a, $b);  

// 28．写一个函数，能够遍历一个文件夹下的所有文件和子文件夹。（5分）

// 29．简述论坛中无限分类的实现原理。（5分）


 
// 17、如何修改SESSION的生存时间(1分).
//    方法1:将php.ini中的session.gc_maxlifetime设置为9999重启apache
//    方法2:$savePath = "./session_save_dir/";
//          $lifeTime = 小时 * 秒;
//          session_save_path($savePath);
//          session_set_cookie_params($lifeTime);
//          session_start();
//    方法3:setcookie() and session_set_cookie_params($lifeTime);
 
// 18、有一个网页地址, 比如PHP开发资源网主页: http://www.phpres.com/index.html,如何得到它的内容?($1分)
//	  方法1(对于PHP5及更高版本):
//    $readcontents = fopen("http://www.phpres.com/index.html", "rb");
//    $contents = stream_get_contents($readcontents);
//    fclose($readcontents);
//    echo $contents;
//    方法2:
//    echo file_get_contents("http://www.phpres.com/index.html"); 


// 19、在HTTP 1.0中，状态码401的含义是(?);如果返回“找不到文件”的提示，则可用 header 函数，其语句为(?);(2分)
// 答:状态401代表未被授权,header("Location:www.xxx.php");
 
// 12、在PHP中，heredoc是一种特殊的字符串，它的结束标志必须?(1分)
// 答:heredoc的语法是用"<<<"加上自己定义成对的标签，在标签范围內的文字视为一个字符串
//    例子:
//    $str = <<<SHOW
//    my name is Jiang Qihui!
//    SHOW;
 
// 13、谈谈asp,php,jsp的优缺点(1分)
/*
ASP全名Active Server Pages，是一个WEB服务器端的开发环境， 利用它可以产生和运
行动态的、交互的、高性能的WEB服务应用程序。ASP采用脚本语言VB Script（Java script
）作为自己的开发语言。 

PHP是一种跨平台的服务器端的嵌入式脚本语言. 它大量地借用C,Java和Perl语言的语法
, 并耦合PHP自己的特性,使WEB开发者能够快速地写出动态生成页面.它支持目前绝大多数数
据库。还有一点，PHP是完全免费的，不用花钱，你可以从PHP官方站点(http://www.php.ne
t)自由下载。而且你可以不受限制地获得源码，甚至可以从中加进你自己需要的特色。 

JSP 是Sun公司推出的新一代站点开发语言，他完全解决了目前ASP,PHP的一个通病－－
脚本级执行（据说PHP4 也已经在Zend 的支持下，实现编译运行）.Sun 公司借助自己在Jav
a 上的不凡造诣，将Java 从Java 应用程序 和 Java Applet 之外，又有新的硕果，就是Js
p－－Java Server Page。Jsp 可以在Serverlet和JavaBean的支持下，完成功能强大的站点
程序。 
　
三者都提供在 HTML 代码中混合某种程序代码、由语言引擎解释执行程序代码的能力。
但JSP代码被编译成 Servlet 并由 Java 虚拟机解释执行，这种编译操作仅在对 JSP 页面的
第一次请求时发生。在 ASP 、PHP、JSP 环境下， HTML 代码主要负责描述信息的显示样式
，而程序代码则用来描述处理逻辑。普通的 HTML 页面只依赖于 Web 服务器，而 ASP 、PH
P、JSP 页面需要附加的语言引擎分析和执行程序代码。程序代码的执行结果被重新嵌入到 
HTML 代码中，然后一起发送给浏览器。 ASP 、PHP、 JSP三者都是面向 Web 服务器的技术
，客户端浏览器不需要任何附加的软件支持。
 */


// 14、谈谈对mvc的认识(1分)
//    由模型(model),视图(view),控制器(controller)完成的应用程序
//    由模型发出要实现的功能到控制器,控制器接收组织功能传递给视图;
 
// 15、写出发贴数最多的十个人名字的SQL，利用下表：members(id,username,posts,pass,email)(2分)
// 	SELECT * FROM `members` ORDER BY posts DESC limit 0,10;
 
// 16. 请说明php中传值与传引用的区别。什么时候传值什么时候传引用?(2分)
/*
	按值传递：函数范围内对值的任何改变在函数外部都会被忽略
   	按引用传递：函数范围内对值的任何改变在函数外部也能反映出这些修改
   	优缺点：按值传递时，php必须复制值。特别是对于大型的字符串和对象来说，这将会是一个代价很大的操作。
   	按引用传递则不需要复制值，对于性能提高很有好处。
*/
 

 // 3. 写一个函数，算出两个文件的相对路径
// 　　如 $a = '/a/b/c/d/e.php';
// 　　$b = '/a/b/12/34/c.php';
// 　　计算出 $b 相对于 $a 的相对路径应该是 ../../c/d将()添上
function getRelativePath($a, $b) {   
$returnPath = array(dirname($b));   
  $arrA = explode('/', $a);   
  $arrB = explode('/', $returnPath[0]);   
  for ($n = 1, $len = count($arrB); $n < $len; $n++) {   
      if ($arrA[$n] != $arrB[$n]) {   
          break;   
      }    
  }   
  if ($len - $n > 0) {   
      $returnPath = array_merge($returnPath, array_fill(1, $len - $n, '..'));   
  }   
   
  $returnPath = array_merge($returnPath, array_slice($arrA, $n));   
  return implode('/', $returnPath);   
}   
echo getRelativePath($a, $b);  

// 17. 在PHP中error_reporting这个函数有什么作用? (1分)
// 设置错误级别与错误信息回报
 

 
// 22、JS的转向函数是?怎么引入一个外部JS文件?(2分)
// window.location.href,
// <script type="text/javascript" src="js/js_function.js"></script>
 
// 23、foo()和@foo()之间有什么区别?(1分)
// @foo()控制错误输出
 
// 24、如何声明一个名为”myclass”的没有方法和属性的类? (1分)
// class myclass{ }
 
// 25、如何实例化一个名为”myclass”的对象?(1分)
// new myclass()
 
// 26、你如何访问和设置一个类的属性? (2分)
// 	$object = new myclass();
//    $newstr = $object->test;
//    $object->test = "info";
 
// 27、mysql_fetch_row() 和mysql_fetch_array之间有什么区别? (1分)
//    mysql_fetch_row是从结果集取出1行数组,作为枚举
//    mysql_fetch_array是从结果集取出一行数组作为关联数组,或数字数组,两者兼得
 
// 28、GD库是做什么用的? (1分)
//    gd库提供了一系列用来处理图片的API，使用GD库可以处理图片，或者生成图片。 
//    在网站上GD库通常用来生成缩略图或者用来对图片加水印或者对网站数据生成报表。
 
// 29、指出一些在PHP输入一段HTML代码的办法。(1分)
// echo "<a href='index.php'>aaa</a>";
 
// 30、下面哪个函数可以打开一个文件，以对文件进行读和写操作?(1分)
//     (a) fget() (b) file_open() (c) fopen() (d) open_file()  [  c  ]
 
// 31、下面哪个选项没有将 john 添加到users 数组中? (1分)
// 　　(a) $users[] = ‘john’;
// 　　(b) array_add($users,’john’);
// 　　(c) array_push($users,‘john’);
// 　　(d) $users ||= ‘john’;  [  a , c  ]
 
// 32、下面的程序会输入是否?(1分)
// 　　$num = 10;
// 　　function multiply(){
// 　　   $num = $num * 10;
// 　　}
// 　　multiply();
// 　　echo $num;
// 　　
//     输出:10
 
// 33、使用php写一段简单查询，查出所有姓名为“张三”的内容并打印出来 (2分)
// 　　表名User
// 　　Name Tel Content Date
// 　　张三 13333663366 大专毕业 2006-10-11
// 　　张三 13612312331 本科毕业 2006-10-15
// 　　张四 021-55665566 中专毕业 2006-10-15
// 　　请根据上面的题目完成代码：
// 　　$mysql_db=mysql_connect("local","root","pass");
// 　　@mysql_select_db("DB",$mysql_db);
//     $result = mysql_query("SELECT * FROM `user` WHERE name='张三'");
//     while($rs = mysql_fetch_array($result)){
//       echo $rs["tel"].$rs["content"].$rs["date"];
//     }    

// 34、如何使用下面的类,并解释下面什么意思?(3)
// 　　class test{
//      function Get_test($num){
// 　　    $num=md5(md5($num)."En");
// 　　    return $num;
// 　　 }
// 　　}
//    $testnum = "123";
//    $object = new test();
//    $encrypt = $object->Get_test($testnum);
//    echo $encrypt;
//    类test里面包含Get_test方法,实例化类调用方法多字符串加密
 
// 35、写出 SQL语句的格式 : 插入 ，更新 ，删除 (4分)
// 　　表名User
// 　　Name Tel Content Date
// 　　张三 13333663366 大专毕业 2006-10-11
// 　　张三 13612312331 本科毕业 2006-10-15
// 　　张四 021-55665566 中专毕业 2006-10-15
// 　　(a) 有一新记录(小王 13254748547 高中毕业 2007-05-06)请用SQL语句新增至表中
//     mysql_query("INSERT INTO `user` (name,tel,content,date) VALUES 
//     ('小王','13254748547','高中毕业','2007-05-06')")
 
// 　　(b) 请用sql语句把张三的时间更新成为当前系统时间
//     $nowDate = date("Ymd");
//     mysql_query("UPDATE `user` SET date='".$nowDate."' WHERE name='张山'");
 
// 　　(c) 请写出删除名为张四的全部记录
//     mysql_query("DELETE FROM `user` WHERE name='张四'");
 
// 36、请写出数据类型(int char varchar datetime text)的意思; 请问varchar和char有什么区别(2分)
//    int是数字类型,char固定长度字符串,varchar实际长度字符串,datetime日期时间型,text文本字符串
//    char的场地固定为创建表设置的长度,varchar为可变长度的字符
 
// 38、写出以下程序的输出结果 (1分)
// 　　$b=201;
// 　　$c=40;
//     $a=$b>$c?4:5;
// 　　echo $a;
// 　　
//   4
 
// 39、检测一个变量是否有设置的函数是否?是否为空的函数是?(2分)
// isset($str),empty($str);
 
// 40、取得查询结果集总数的函数是?(1分)
// mysql_num_rows($result);
 
// 41、$arr = array('james', 'tom', 'symfony'); 请打印出第一个元素的值 (1分)
// echo $array[0];
 
// 42、请将41题的数组的值用','号分隔并合并成字串输出(1分)
// for($i=0;$i<count($array);$i++){ echo $array[$i].",";}
 
// 43、$a = 'abcdef'; 请取出$a的值并打印出第一个字母(1分)
// echo $a{0} 或 echo substr($a,0,1)
 
// 44、PHP可以和sql server/oracle等数据库连接吗?(1分)
// 当然可以
 
// 45、请写出PHP5权限控制修饰符(3分)
// public(公共),private(私用),protected(继承)
 
// 46、请写出php5的构造函数和析构函数(2分)
// 答:__construct , __destruct
 
// 47、完成以下:
//    (一)创建新闻发布系统，表名为message有如下字段 (3分)
// 　　id 文章id
// 　　title 文章标题
// 　　content 文章内容
// 　　category_id 文章分类id
//     hits 点击量
// 答:CREATE TABLE 'message'(
//    'id' int(10) NOT NULL auto_increment,
//    'title' varchar(200) default NULL,
//    'content' text,
//    'category_id' int(10) NOT NULL,
//    'hits' int(20),
//    PRIMARY KEY('id');
//    )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
//     (二)同样上述新闻发布系统：表comment记录用户回复内容，字段如下 (4分)
// 　　comment_id 回复id
// 　　id 文章id，关联message表中的id
// 　　comment_content 回复内容
// 　　现通过查询数据库需要得到以下格式的文章标题列表,并按照回复数量排序，回复最高的排在最前面
// 　　文章id 文章标题 点击量 回复数量
// 　　用一个SQL语句完成上述查询，如果文章没有回复则回复数量显示为0
// 答:SELECT message.id id,message.title title,IF(message.`hits` IS NULL,0,message.`hits`) hits,
//    IF(comment.`id` is NULL,0,count(*)) number FROM message LEFT JOIN 
//    comment ON message.id=comment.id GROUP BY message.`id`;
 
// 　　(三)上述内容管理系统，表category保存分类信息，字段如下 (3分)
// 　　category_id int(4) not null auto_increment;
// 　　categroy_name varchar(40) not null;
// 　　用户输入文章时，通过选择下拉菜单选定文章分类
// 　　写出如何实现这个下拉菜单
// 答:function categoryList()
// {
//     $result=mysql_query("select category_id,categroy_name from category")
//             or die("Invalid query: " . mysql_error());
//     print("<select name='category' value=''>\n");
//     while($rowArray=mysql_fetch_array($result))
//     {
//        print("<option value='".$rowArray['category_id']."'>".$rowArray['categroy_name']."</option>\n");
//     }
//     print("</select>");
// }
 
// 编程题:
// 1. 写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名
//    例如: http://www.sina.com.cn/abc/de/fg.php?id=1 需要取出 php 或 .php
// 答案1:
//    function getExt($url){
//    $arr = parse_url($url);
   
//    $file = basename($arr['path']);
//    $ext = explode(".",$file);
//    return $ext[1];
// }
// 答案2:
//     function getExt($url) {
//     $url = basename($url);
//     $pos1 = strpos($url,".");
//     $pos2 = strpos($url,"?");
//     if(strstr($url,"?")){
//          return substr($url,$pos1 + 1,$pos2 - $pos1 - 1);
//     } else {
//       return substr($url,$pos1);
//     }
// }
 

// 2. 在 HTML 语言中，页面头部的 meta 标记可以用来输出文件的编码格式，以下是一个标准的 meta 语句
// 　　请使用 PHP 语言写一个函数，把一个标准 HTML 页面中的类似 meta 标记中的 charset 部分值改为 big5
// 　　请注意:
// 　　1. 需要处理完整的 html 页面，即不光此 meta 语句
// 　　2. 忽略大小写
//     3. ' 和 " 在此处是可以互换的
//     4. 'Content-Type' 两侧的引号是可以忽略的，但 'text/html; charset=gbk' 两侧的不行
// 　　5. 注意处理多余空格
 
// 3. 写一个函数，算出两个文件的相对路径
// 　　如 $a = '/a/b/c/d/e.php';
// 　　$b = '/a/b/12/34/c.php';
// 　　计算出 $b 相对于 $a 的相对路径应该是 ../../c/d将()添上
// 答:function getRelativePath($a, $b) {   
//     $returnPath = array(dirname($b));   
//     $arrA = explode('/', $a);   
//     $arrB = explode('/', $returnPath[0]);   
//     for ($n = 1, $len = count($arrB); $n < $len; $n++) {   
//         if ($arrA[$n] != $arrB[$n]) {   
//             break;   
//         }    
//     }   
//     if ($len - $n > 0) {   
//         $returnPath = array_merge($returnPath, array_fill(1, $len - $n, '..'));   
//     }   
       
//     $returnPath = array_merge($returnPath, array_slice($arrA, $n));   
//     return implode('/', $returnPath);   
//    }   
//    echo getRelativePath($a, $b);  

// 填空题:
// 1.在PHP中，当前脚本的名称(不包括路径和查询字符串)记录在预定义变量__$_SERVER['PHP_SELF']__中;
//而链接到当前页面的URL记录在预定义变量__$_SERVER['HTTP_REFERER']__
 
// 中
 
// 2.执行程序段echo 8%(-2) 将输出__0__。
 
// 3.在HTTP 1.0中，状态码 401 的含义是____;如果返回“找不到文件”的提示，则可用 header 函数，其语句为____。
 
// 4.数组函数 arsort 的作用是__对数组进行逆向排序并保持索引关系__;语句 error_reporting(2047)的作用是__报告所有错误和警告__。
 
// 5.PEAR中的数据库连接字符串格式是____。
 
// 6.写出一个正则表达式，过虑网页上的所有JS/VBS脚本(即把scrīpt标记及其内容都去掉):
 
// 7.以Apache模块的方式安装PHP，在文件http.conf中首先要用语句____动态装载PHP模块，然后再用语句____使得Apache把所有扩展名为php的文件都作为PHP脚本处理。
//   LoadModule php5_module "c:/php/php5apache2.dll" , AddType application/x-httpd-php .php,
 
// 8.语句 include 和 require 都能把另外一个文件包含到当前文件中，它们的区别是____;为了避免多次包含同一文件，可以用语句__require_once||include_once__来代替它们。
 
// 9.类的属性可以序列化后保存到 session 中，从而以后可以恢复整个类，这要用到的函数是____。
 
// 10.一个函数的参数不能是对变量的引用，除非在php.ini中把__allow_call_time_pass_reference boolean__设为on.
 
// 11.SQL中LEFT JOIN的含义是__自然左外链接__。如果 tbl_user记录了学生的姓名(name)和学号(ID)，tbl_score记录了学生(有的学生考试以后被开除了，没有其记录)的学号(ID)
 
// 和考试成绩(score)以及考试科目(subject)，要想打印出各个学生姓名及对应的的各科总成绩，则可以用SQL语句____。
 
// 12.在PHP中，heredoc是一种特殊的字符串，它的结束标志必须____。
 
// 编程题:
// 13.写一个函数，能够遍历一个文件夹下的所有文件和子文件夹。
// 答:
// function my_scandir($dir)
// {
//      $files = array();
//      if ( $handle = opendir($dir) ) {
//          while ( ($file = readdir($handle)) !== false ) {
//              if ( $file != ".." && $file != "." ) {
//                  if ( is_dir($dir . "/" . $file) ) {
//                      $files[$file] = scandir($dir . "/" . $file);
//                  }else {
//                      $files[] = $file;
//                  }
//              }
//          }
//          closedir($handle);
//          return $files;
//      }
// }
 

 
//  1.烧一根不均匀的绳，从头烧到尾总共需要1个小时。
//     现在有若干条材质相同的绳子，
//     问如何用烧绳的方法来计时一个小时十五分钟呢？

// 2.你有一桶果冻，其中有黄色、绿色、红色三种，
    // 闭上眼睛抓取同种颜色的两个。
    // 抓取多少个就可以确定你肯定有两个同一颜色的果冻？

// 3.如果你有无穷多的水，一个3公升的提捅，
// 一个5公升的提捅，两只提捅形状上下都不均匀，
// 问你如何才能准确称出4公升的水？（40秒-3分钟）


//  4.一个岔路口分别通向诚实国和说谎国。
//     来了两个人，已知一个是诚实国的，另一个是说谎国的。
//     诚实国永远说实话，说谎国永远说谎话。
//     现在你要去说谎国，但不知道应该走哪条路，
//     需要问这两个人。请问应该怎么问？（20秒-2分钟）



//  5.12个球一个天平，现知道只有一个和其它的重量不同，
//     问怎样称才能用三次就找到那个球。13个呢？
//     （注意此题并未说明那个球的重量是轻是重，所以需要仔细考虑）（5分钟-1小时）

http://blog.csdn.net/jemmy/article/details/481881

// 6.在9个点上画10条直线，要求每条直线上至少有三个点？（3分钟-20分钟）

// 7.在一天的24小时之中，时钟的时针、分针和秒针完全重合在一起的时候有几次？
// 都分别是什么时间？你怎样算出来的？（5分钟-15分钟）



// 1、先用两条绳子，从分别从两边点，对齐，当火相遇时，
// 就是半个小时的时间的程度，同样在计算出一半，即15分钟的长度，在加上一条整跟的，就是1小时15分（2分钟）
// 2、4个（1秒）
// 3、第一步，5－3＝2；
//   第二步，把3倒掉，把2倒进3的桶；
//   第三步，用5把3填满，剩4。
//   （约5分钟）

// 5、为便于区分，我们先将12个球标上号码，分别为1——12号，再将天平分为左右两边。
// 第一次：将1、3、5、7号球放在天平的左边，将2、4、6、8号球放在天平右边。
// 将会出现三种可能：
// 1、天平平衡，证明有问题的球在9、10、11、12号球中；
// 2、左侧下沉，说明有问题的球在1、2、3、4、5、6、7、8号球中；
// 3、右侧下沉，说明有问题的球在1、2、3、4、5、6、7、8号球中，如果将太平扭过来，与左侧下沉相同。
// 第二次：天平左侧放1、3、4号球，右侧放2、5、9号球，也有三种可能：
// 1、天平平衡，证明有问题的球在6、7、8号球中（第三次A）；
// 2、左侧下沉，说明有问题的球在1、2、3号球中（第三次B）；
// 3、右侧下沉，说明有问题的球在4、5号球中（第三次C）。
// 第三次A：分别将6、8号球放在天平的两侧，如果平衡，7号球有问题；如果不平衡，轻的那个球有问题。
// 第三次B：分别将1、3号球放在天平的两侧，如果平衡，2号球有问题；如果不平衡，重的那个球有问题。
// 第三次C：分别将4、9号球放在天平的两侧，如果平衡，5号球有问题；如果不平衡，4号球有问题。

分三组:每组四个,第一组编号1-4，第二组5-8，第三组9-12. 
第一次称：天平左边放第一组，右边放第二组。 

A 第一种可能：平衡。则不同的在第三组。 
	接下来可以在左边放第9、10、11号，右边放1、2、3号三个正常的。 
	a.如果平衡，则12号是不同的; 
	b.如果左重右轻，则不同的在9、10、11号中，而且比正常球重。
		再称一次：9放左边，10放右边，
		如果平衡，则11号是不同的；
		如果左重右轻，则9号是不同的，
		如果右重左轻，则10号是不同的。 
	c.如果左轻右重，道理同b 

B 第二种可能：左重右轻，则不同的在1-8号中，但不知比正常的轻还是重。 
	第二次称：左边放1、2、5号，右边放6、9、3号。 
	a.如果平衡。则不同的在4、7、8中。可以称第三次：左边放4、7，右边放9、10。
		如果平衡，则8是不同;
		如果左重右轻，则4是不同；
		如果左轻右重，则7是不同。 
	b.仍然左重右轻。则不同的在位置没有改变的1、2、6中。
		可以称第三次：左边放1、6，右边放9、10。
		如果平衡，则2是不同; 
		如果左重右轻，则1是不同;
		如果左轻右重，则6是不同。
	c：左轻右重。则不同的在5、3、中，因为只有它们改变了原来的位置。
		可以称第三次：左放5，3，右放9，10。
		如果左轻右重，则5是不同，如果左重右轻，则3是不同。 

C 第三种可能：左轻右重，道理同B 



// （3小时）
// 6、五角星去掉一个点（10分钟）
// 7、24次，00:00:00,01:05:05,02:11:11,03:16:16,04:22:22,05:27:27,06:33:33,07:38:38,08:44:44,09:49:49,10:55:55,11:59:59,12:00:00,13:05:05,14:11:11,15:16:16,16:22:22,17:27:27,18:33:33,19:38:38,20:44:44,21:49:49,22:55:55,23:59:59



 ?>