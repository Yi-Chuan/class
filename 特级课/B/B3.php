<?php 

// 一、读程题，请仔细阅读一下程序，并按照要求写出答案
// 1.1、（5分）下面程序输出是什么？

	// $int_a = 5;
	// function factorial() {
	// 	for($int_i=$int_a; $int_i>0; $int_i--) {
	// 		$int_a = $int_a * $int_i;
	// 	}
	// }
	// factorial();
	// echo $int_a;

// 答：5；应为$int_a没有进入函数里

// 1.2、（5分）请指出以下代码的错误之处（圈出来并加以改正）

// 	function baz($y $a) {
// 		$x = new Array();
// 		$x[sales] = 60;
// 		$x[profit] = 20;
// 		foreach($x as $key = $value) {
// 			echo $key + “ ” + $value + “<BR>”;
// }
// }

// 以下是正确答案
// php
// 	function baz($y,$a){
// 		$x=array();
// 		$x['sales']=60;
// 		$x['profit']=20;
// 		Foreach($x as $key=>$value){
// 		echo $key.” ”.$value.”<br>”;
// }
// }


// 二、编程题
// 2.1、（5分）用PHP输出明天的时间（格式 2010-10-01 12:00:00）
// 答:
// Date_default_timezone_set('PRC');//设置当前时区为中华人民共和国
// Echo date(“Y-m-d H:i:s”,strtotime(“+1 day”));



// 2.2、（10分）写一个函数Check_ip，使用正则表达式检测一个IPV4的IP是否正确，正确返回1，错误返回0，例如 Check_ip('127.0.0.1')。
// 	答：
	// Function check_ip($mact){
	// 	$a='/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/';
	// 	$v=preg_match($a,$mact);
 //        If($v!=0){
 //            echo  1;
 //        }else{
 //            echo  0;
 //        }
        
	// }
	// check_ip('127.0.0.1');
// 1.	写出匹配IP的正则表达式（2分）

$ip = '127.0.0.1';
$ip = '255.255.255.0';
// $ip = '192.168.161.154';

$reg = '/^((1\d?\d?|[1-9]\d?)|2[0-4]\d|25[0-5])
(\.(([01]\d?\d?|[1-9]\d?)|2[0-4]\d|25[0-5])){3}$/';

preg_match($reg,$ip,$tmp);

var_dump($tmp);

// 2.3、(10分)有一数组 $a=array(4,3,8,9,2); 写一个排序函数对数组进行排序操作,要求使用快速排序法.快速排序的基本思想是:在待排序记录序列中,任取其中的一个记录(这里取了第一个)并以该记录的关键字作为基准,经过一趟排序后,所有关键字比它小的记录都交换到它的左边,比它大的记录都交换到它的右边.然后再分别对划分到它左,右两部分记录序列重复上述过程,直至每一部分最终划分为一个记录时为止即完成了排序工作.
// 	答：
// 	$a=array(4,3,8,9,2);
// 	$len=count($a);
// 	For($i=0;$i<$len-1;$i++){
// 		For($j=0;$j<$len-$i-1;$i++){
// 			If($a[$j]<$a[$j+1]){
// 				$date=$a[$j];
// 				$a[$j]=$a[$j+1];
// 				$a[$j+1]=$date;
// }
// }
// }

// 	Prinr_r($a);



// 2.4、(10分)有一表 memu(main_menu, parent_menu, menu_name),请用递归法打印树形菜单,将所有的menu列出来.
// 答：下面黄色是建测试表语句
/*
	create table menu (
		main_menu int auto_increment primary key,
		parent_menu int,
		menu_name varchar(255)
	)engine MyISAM default charset=utf8;
	insert into menu values (1,0,'服装'),(2,0,'数码'),(3,1,'外套'),(4,3,'男装'),(5,2,'手机'),(6,3,'女装');
	
*/
	
// 	//初始化数据库
	// $link=mysql_connect('localhost','root','');
	// mysql_select_db('test');
	// mysql_set_charset('utf8');
	
	// //显示菜单
	// show_menu();
	
	// //查是否有子分类
	// function get_child_num($id){
	// 	$sql="select count(*) from menu where parent_menu=$id";
	// 	$res=mysql_query($sql);
	// 	$count= mysql_result($res,0,0);
	// 	mysql_free_result($res);
	// 	return $count;
	// }
	
	// //显示菜单(递归)
	// //$parent_id 父级菜单id
	// //$step 菜单层次
	// function show_menu($parent_id=0,$step=0){
	// 	$sql="select * from menu where parent_menu=$parent_id";
	// 	$result=mysql_query($sql);
	// 	++$step;
	// 	while($row=mysql_fetch_assoc($result)){
		
	// 		echo str_repeat('&nbsp;',$step*2).$row['menu_name'].'<br>';
			
	// 		//如果有子菜单，则递归
	// 		if(get_child_num($row['main_menu'])>0){
	// 			show_menu($row['main_menu'],$step);
	// 		}			
	// 	}
	// 	mysql_free_result($result);
	// }
	
	// //关闭数据库
	// mysql_close($link);
	

// 三、
// 四、简单题
// 3.1、（5分）在开发项目中，需要上传超过8M的文件，请说明在php.ini需要修改的配置项。
// 	答：post_max_size=2M(默认)
// 		Upload_max_filesize=8M（默认）

// 3.2、（5分）写出session的运行机制，session与cookie的区别。多台WEB服务器如何共享session。
// 答：session的运行机制：
// 用户A访问站点Y，如果站点Y指定了session_start();(以下假设session_start()总是存在)那么会产生一个session_id,这个session_id一般会以COOKIE的形式保存到用户A（我们可以通过在php.ini里设置session.use_only_cookies为1，强制SESSIONID必须以COOKIE专递。）。这时候SESSION ID表现为$_COOKIE['PHPSESSID'];(PHPSESSID可用session_name()函数来下修改)
// 用户A接着访问，这个session id($_COOKID['PHPSESSID'])就会在A每次访问Y的时候传送到站点Y。
// 在站点Y上，会有这么一个目录，是用来保存SESSION的实际数据的。站点Y接收到session id,然后通过session id,来获得与SESSION数据的关联，并返回SESSION数据。
// 	答：session与cookie的区别：
// SESSION存储在服务器端，用户无法进行修改，相对比较安全，COOKIE存储在客户端，用户通过手段可以进行修改，相对不安全。
// Session会在一定时间内保存在服务器上，当访问增多，会比较占用服务器资源。
// 单个cookie在客户端的限制是3k，就是说一个站点在客户端存放的COOKIE不能超过3k。

// 答：多台服务器如何共享SESSION：
// 共享就是每台服务器公用一个，那显然要把这个session专门放到一个地方
// 比如存数据库，每台服务器都调这个数据库里的session
// 存memcache 一样的原理


  


// 3.3、（5分）SQL中LEFT JOIN 的含义是什么?如果tbl_user记录了学生的姓名(name)和学号(ID),tbl_score记录了学生(有的学生考试以后被开除了,没有记录)的学号(ID)和考试成绩(score)以及考试科目(subject),要想打印出各个学生姓名及对应的各科总成绩,请写出SQL语句.
// 答：left join 的含义：LEFT JOIN是以左表为基准进行外联查询，如果左表的数据大于右表的数据，它们一一对应，右表超出左表的数据也会以NULLL显示出了。如果少于右表的数据的话，那么左表超出的数据将不会显示出来。


mysql> select s.id,s.name,sum(sc.score) from stu as s 
left join score as sc on s.id=sc.uid group by s.name;
+----+------+---------------+
| id | name | sum(sc.score) |
+----+------+---------------+
|  8 | 一万 |          NULL |
|  1 | 张三 |           100 |
|  2 | 李四 |           174 |
|  7 | 牌九 |          NULL |
|  3 | 王五 |           100 |
|  6 | 王八 |          NULL |
|  5 | 田七 |          NULL |
|  9 | 碰   |          NULL |
|  4 | 赵六 |          NULL |
+----+------+---------------+
9 rows in set (0.00 sec)





// 数据库


// 一、写SQL语句，显示所有的产品的：产品名称、类别名称、录入日期。(10分)
// Select category.name,products.name,products.input_date from Category,products where category.id=products.caregoryid
// 二、写SQL语句，要求统计点击数前十位的：产品名称和产品点击数量。(10分)

mysql> select count(p.product_id) c,g.title,p.Product_id from goods as g left jo
in product_hit as p on g.id = p.product_id group by p.product_id order by c desc
 limit 0,2;
+---+--------------------------+------------+
| c | title                    | Product_id |
+---+--------------------------+------------+
| 3 | 呛口小辣椒刺绣吊带连衣裙 |          2 |
| 2 | 小清新格子包臀裙         |          1 |
+---+--------------------------+------------+



	// $data = array('a', 'b', 'c');

	// foreach($data as $key=>$val) {
	// 	$val = &$data[$key];
	// }

	// var_dump($data); 



// 问题1：程序执行时，每一次循环结束后变量$data的值是什么？请解释。（10分）
// 答：第一次循环时，把下表为0的成员，引用赋值给变量$val,$val与$data[0]内容相同，
// 要是其中一个改变，另一个也改变，此时，$data原样输出，只是$data[0]变成了引用
// 输出结果 a b c
// 第二次循环时，$key的值为1，把$data[1]引用复制给$val.
// 由于$val与$data[0]也是引用关系，所以这时，$val,$data[0],$data[1]三者值同为'B'
// $val不再与$data[0]有关系了，只与$data[1]是引用关系
// // b  b  c
// 第三次循环时，$key的值为2，把$data[2]引用复制给$val,
// 由于$data[1]与$val是引用关系，所以都将改变$data[1]、$val、$data[2]三者值一样
// //b c c
// 问题2：程序执行完后，变量$data的值是什么？请解释。（10分）
// 答：结果为B c c






//  