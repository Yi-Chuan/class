<?php 

// 一、选择题 每题3分
// 01. 输出为Mozilla/4.0(compatible;MSIE5.01;Window NT 5.0)时，可能的输出语句是：B
//    A. $_SERVER['HTTP_USER_AGENT_TYPE'];
//    B. $_SERVER['HTTP_USER_AGENT'];
//    C. $_SERVER['USER_AGENT'];
//    D. $_SERVER['AGENT'];
   
// 02. 下面功能PHP无法实现的是：D
//    A. 服务器端脚本运行
//    B. 命令行脚本运行
//    C. 客户端图形界面（GUI）程序
//    D. 浏览器端执行DOM操作 
   
// 03. 下面说法不正确的是：C
//    A. PHP有四种标量类型：布尔型(boolean),整型(integer),浮点型(float),字符串(string)
//    B. 浮点型(float)与双精度型(double)是同一种类型
//    C. 复合类型包括:数组(array),对象(object),资源(resource) 
//    D. 伪类型：混合型(mixed),数字型(number),回调(callback)
   
// 04. 执行下面的代码后，

//    echo function_exists('print');

// 	Echo print array eval list 语言结构
//     得到的输出是：A
//    A. 空 
//    B. true
//    C. false
//    D. FALSE

// 05. 下面不是PHP语法的组成部分的函数是：C
//    A. array
//    B. eval
//    C. each
//    D. list

// 06. 执行下面的代码的结果是什么？A


//       $bool = TRUE;
//       echo gettype($bool);
//       echo is_string($bool);
//   

//    A. boolean 
//    B. boolean0
//    C. booleanFALSE
//    D. booleanfalse
   
// 07. 写出下面代码执行的结果：

//       $a = 12;
//       $b = 012
//       $c = 0x12;
//       echo $a,"\n",$b,"\n",$c;

//    12 10 18

// 二，十、八和十六进制之间转换，核心点二进制
// 08. 下面代码的执行结果是什么？C

    // echo 1+2+"3+4+5";


//    A. 0
//    B. 3
//    C. 6 
//    D. "33+4+5";
   
// 09. 下面代码加入下面那个函数后返回TRUE:B
//    return ? == 'A';
//    A. ord(65)
//    B. chr(65)
//    C. 65+''
//    D. ''+65
   
// 10. 下面代码的输出正确的是：C

//       $a = array(1=>5,5=>8,22,2=>'8',81);
//       echo $a[7];
//       echo $a[6];
//       echo $a[3];

//    A. 空2281 B.空8122 C.8122空 D.空空空
   
// 11. 下面代码的输出结果：D

//       $a[bar]='hello';
//       echo $a[bar];
//       echo $a['bar'];

//    A. hello B. 空空 C.报错 D.hellohello 
   
// 12. 写出下面代码的结果：C

//       echo 1>>0;    //001 ==>1
//       echo 2>>1;    //010 ==> 001=>1
//       echo 3<<2;    //011 <== 01100 =>12

//    A. 012 B. 106 C. 1112  D.123

// 13. 下面代码的执行结果：D

//       for($i=0;i<10;$i++){
//          print $i;
//       }
//    A. 0123456789 B. 012345678910 C. 无输出 D. 死循环
   
// 14. 下面对于echo, print 的描述正确的是：C
//    A. echo, print 都可以打印多个参数
//    B. print 可以打印多个参数,echo 不可以
//    C. echo  可以打印多个参数,print不可以
//    D. echo, print 都不可以打印多个参数
   
// 15. 对于正面的代码
//    $fruits = array('strawberry'=>'red', 'banana'=>'yellow');
//    不能够正确得到结果'yellow'的代码是：B
   // echo "A banana is {$fruits['banana']}"; //ok
   // echo "A banana is $fruits['banana']";//X
   // echo "A banana is {$fruits[banana]}";//ok
   // echo "A banana is $fruits[banana]";//ok
   
// 16. 下面代码执行完成后的结果是什么？

//       function change(){
//          static $i = 0;
//          $i++;
//          return $i;
//       }
//       print change();
//       print change();

//    1    2
// 18. <?php
//      $foo = 'test';
//      $bar = <<<EOT
//      $foo bar
// EOT;
// echo $bar;

// 上面的语句输出结果 (C):
//    a. $foo bar; 
//    b. 'EOT' $foo bar EOT;
//    c. test bar;
//    d. 'EOT' test bar EOT;

// 19. $a=3; $b=4;
//    if($a||$b=5){
//       echo 'tudo';
//    }
//    $b的值是(A):
//    a. 4;
//    b. 5;
//    c. 3;
//    d. false
   
// 二、简答题 每题3分
// 1.  什么事面向对象？主要特征是什么？
   // 1) 面向对象是程序的一种设计方式，它利于提高程序的重用性，是程序结构更加清晰。

   // 2) 主要特征：封装、继承、多态


// 2. SESSION 与 COOKIE的区别是什么，请从协议，产生的原因与作用说明?
   // 1) http无状态协议，不能区分用户是否是从同一个网站上来的，
// 同一个用户请求不同的页面不能看做是同一个用户

   // 2) SESSION保存在服务器端，COOKIE保存在客户端，
// SESSION依赖COOKIE进行传输，如果COOKIE被禁用了，SESSION将不能继续使用


// 3. HTTP 状态中302、403、 500代码含义？
   // 302重定向、403服务器拒绝访问、500服务器内部错误

// 4. Linux 下建立压缩包，解压缩包的命令。
   // 1) tar czf test.tar.gz test.php
   // 2) tar xzf test.tar.gz

// 5. 请写出数据类型(int char varchar datetime text)的意思；请问 varchar 和 char有什么区别？
   // int是数字类型,char固定长度字符串,varchar实际长度字符串,datetime日期时间型,text文本字符串,char的场地固定为创建表设置的长度,varchar为可变长度的字符 

// 6. MyISAM 和 InnoDB 的基本区别？
   // 1)在增、删、改和查方面,myisam要优于innodb表引擎,当数据量特别大时，他们的速度相差不大
   // 2)innodb支持myisam所不具备的事务支持、存储过程,行级锁定等等

// 7. 不使用cookie向客户端发送一个cookie.

// session_start();
// echo $sn=session_name();
// echo "<br>";
// echo $sid=session_id();
// echo "<a href='test2.php?{$sn}={$sid}'>url传递session</a>";

// //PHPSESSIONID=kkkkkaldfjaldfjladsf;



// 10. isset() 和 empty() 区别，对不同数据的判断结果
   // 1)isset()是判断变量是否存在，是否定义
   // 2)empty()是判断变量的值是否为空.


// 12. 如何在页面之间传递变量(至少两种方式) ?
   // 1)get
   // 2)post
   // 3)ajax
   // 4)curl
   // 5)cookie
   // 6)session

// 三、PHP 代码题

// 1. 写出匹配URL的正则表达式.   3分
   // http://www.baidu.com/index.php?id=1&name=user1
   // (http|ftp):\/\/(www.)?(\S*)(\?\S*\&\S*)?
   // (.*)\/\/(.*)\?(.*)?

// 2. 请写出常见的排序算法，并用PHP实现冒泡排序，将数组$a = array()按照从小到大的方式进行排序。5分
   // 3 2 2  2 1
   // 2 3 1  1 2
   // 1 1 3  
   // $i>$j
   // $tmp=$i;
   // $i=$j;
   // $j=$tmp;


// Function mysort($arr){
// 	For($i=0; $i<count($arr); $i++){
// 		For($j=0; $j<count($arr)-1; $j++){
// 				If($arr[$j] > $arr[$j+1]){
// 						$tmp=$arr[$j];
// 						$arr[$j]=$arr[$j+1];
// 						$arr[$j+1]=$tmp;
//                 }
//         }
//     }
// 	Return $arr;
// }
// $arr=array(3,2,1);
// print_r(mysort($arr));

// //$a=10 $b=20 $tmp=$a $a=$b $b=$tmp 

// 3. 在数据库test中的一个表student，字段是name，class，score。分别代表姓名、所在班级，分数。
// 1) 算出每个班级中的学生，按照成绩降序排序;    3分
   // Select name,class,score from student order by class desc , score desc
// 2) 查出每个班的及格人数和不及格人数，格式为：class、及格人数、不及格人数；3分
   // SELECT class, 
   // SUM(CASE WHEN score>=60 
THEN 1 ELSE 0 END), 
   // SUM(CASE WHEN score<60 THEN 1 ELSE 0 END) 
   // FROM tb1 GROUP BY class
// 3) 用PHP写入连接数据库("localhost","msuser","mspass")、执行以上SQL、显示结果、判断错误、关闭数据库的过程   5分
   // $conn=mysql_connect(‘localhost’,'msuser’,’mspass′);
   // Mysql_select_db(‘test’);
   // $sql=" SELECT class, 
   // SUM(CASE WHEN score>=60 THEN 1 ELSE 0 END), 
   // SUM(CASE WHEN score<60 THEN 1 ELSE 0 END) 
   // FROM tb1 GROUP BY class";
   // if($result=Mysql_query($sql)){
   // 	while($row=mysql_fetch_assoc($result)){
   // 		print_r($row);
   // 	}
   // }
   // Mysql_close($conn);


 ?>