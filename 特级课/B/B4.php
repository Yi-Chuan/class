<?php 

// 使用PHP语言自定义一个函数，此函数作用是将一个句子按单词反序。
// 例如“One World One Dream”，反序后变为 “Dream One World One”。（5分）
// function myrev($str){
// 	$arr = explode(' ',$str);
// 	$num = count($arr);
// 	for($i = 0; $i < $num/2; $i++){
// 		$temp = $arr[$i];
// 		$arr[$i] = $arr[$num-$i-1];
// 		$arr[$num-$i-1] = $temp;
// 	}
// 	return implode(' ',$arr);
// }
// $str = 'One World One Dream';
// echo myrev($str);

// $str = 'One World One Dream';
	// myrev($str);
	// function myrev($str)
	// {
	// 	$s = '';
	// 	$arr = explode(' ',$str);
	// 	$num = count($arr);
	// 	for ($i=$num-1; $i >= 0; $i--) { 
	// 		$s .= $arr[$i].' ';
	// 	}
	// 	rtrim($s);
	// 	echo $s;
	// }


// 题目二：两条查询语句，
// 一条是Select * from table1 where id>10 and id<100
// 一条是Select * from table2 where id>200 and id<500 
// 请尝试只写一条SQL语句，完成相应的查询任务。（5分）
// Select * from table1 where id>10 and id<100 union Select * from table2 where id>200 and id<500







// 题目三：有两个文件，一大一小，其中之一有8,000,000个电话号码，
// 另一个文件有500个电话号码，请说明一种方法找出重复的电话号码。（5分）

// 查询8,000,000个电话号码的表得出的结果集中的电话号码去比对500个电话号码的表,将重复的号码找出


// 题目四：请用正则表达式写一个函数，验证电子邮件的格式是否正确。
// /^[\w\-]+@[\w\-]+(\.\w+)+$/    （5分）




// 题目五：请仅使用一次正则替换，将下面内容（5分）
// private long contract_id;
// private string contract_number;
// private string customer_name;
// 替换为
// private long contractId;
// private string contractNumber;
// private string customerName;

//$ res = @preg_replace('/_([a-z])/e', 
'strtoupper("${1}")',$str);

$res = preg_replace_callback('/_([a-z])/',function($matches){
		return strtoupper($matches[1]);
	},$str);



// 题目六：列举流行的Ajax框架?说明Ajax实现原理是什么及Json（）在Ajax中起什么作用？
// jQuery,作为传输或返回的数据格式使用



// 题目七：我们常可以看到，一些商场买200元的商品可以返100元优惠券（可在本商场代替现金）。
// 请问实际上商品的折扣是多少？
// echo 100/(200+100);
// 如果使用优惠券买东西不能获得新的优惠券，那么总共花去了200元，
// 可以买到200+100元的商品，所以实际折扣为 200/300 = 67%.
// echo 200/300;





// 题目八：我们希望开发一个门户系统，数据存储采用MySQL，用户数量为1000万，
// 预计文章总数为10亿，日更新量至少为10万，日访问量为5000万，
// 对数据库的读写操作比例超过10:1，你如何设计该系统，以确保其高效，
// 稳定的运行？


// （提示：可以从数据库设计，系统框架及网络架构方面进行描述，自由发挥）
// 读写分离,读写服务器比例10:1,使用分页查询减少数据库压力,
// 静态化分页后使用memcache分布式缓存,减少i/o开销和数据压力,
// 增删改时删除对应的静态化数据,通过查询分页,分开静态化对应的分页信息缓存,
// 数据库分库分表分区,使用lvs负载均衡,活跃和不活跃的文章进行分表存储,提高数据库中文章查询
// 效率,建立联合索引,提高查询效率,使用中文分词技术提高文章内容的查询效率



// 题目九
// 1.（基础题）请描述你经常使用的php函数及其主要作用（最少5个）
// Array_pop()：弹出数组的最后一个元素
// Explode()：按特点符号，分隔字符串，返回数组
// Implode();按特点符号，连接数组成为字符串
// Substr();取出字符串中的一部分
// Strrpos();获得字符出现的最后的个位置 

// 2.（基础题）请描述一种你常用的开发框架（语言不限）， 主要使用方法。
// 		(如果框架是自己开发的，请用类图大致描述框架结构)
// BroPHP 	ThinkPHP


// 3.（基础题）请描述一种你常用的ajax调用方法。
// 1. 我经常使用的Ajax请求是使用Get调用 
// 1.首先写一个Ajax类库
// 2.调用类库
// 3.使用get或post发送请求
// 4.对返回值进行处理

// 其他方法：
// $.ajax();
// $.post();

// 4.（基础题）请描述你常用的HTML标记及其主要作用。（最少5种）

// <pre></pre>			原样输出
// 		<table></table>		表格
// 		<script></script>		js脚本
// 		<style></style>		页面模式 
// 		<form>				表单
// 			<input type=”text” />		input标记
// </form>				表单结束
// <div></div>			div
// <span></span>		行内
// <select>				下拉列表 
// </select>				下拉列表结束

// 5．（基础题) 请描述你常用的javascript函数。
// document.getElementById();
// document.getElementsByTag();
// document.getElementsByName();
// setInterval()
// setTimeOut()


// 题目十.（算法题）有1~5000一组乱序数列，请使用伪代码对该数进行排列

// 先把1-5000组成一个数组
// 冒泡排序法
// $arr=array(1,2,3,4,5,6,7,8,9.....5000);
// $total=count($arr);

// for($i=0;$i<$total;$i++){
// 	for($j=0;$j<$total-1;$j++){
// 		if($arr[$j]>$arr[$j+1]){
// 			$tmp=$arr[$i];
// 			$arr[$j]=$arr[$j+1];
// 			$arr[$j+1]=$tmp;
// 		}
// 	}
// }

// 快速排序法
// $arr=array(1,2,3,4,5,6,8,9,.........5000);

// $total=count($arr);
// Function quick($arr){
// 	$left=array();
// 	$right=array();
// 	If($total<=1){
// 		Return $arr;
// 	}
// 	For($i=1;$i<$total;$i++){
// 		If($arr[0]>$arr[$i]){
// 			$left[]=$arr[$i];
// 		}else{
// 			$right[]=$arr[$i];
// 		}
// 	}
// 	$left=quick($left);
// 	$right=quick($right);
// 	Return array_merge($left,array($arr[0]),$right);
// }


// 2.（算法题）公鸡3元每只，母鸡5元每只，小鸡1元3只，一百元钱买一百只鸡，请用伪代码写出求公鸡，母鸡和小鸡的数目
//$y = 母鸡 $x = 公鸡   $z = 小鸡
//公鸡3元每只，母鸡5元每只，小鸡1元3只
// for($y=0;$y<=20;$y++){
// 	for($x=0;$x<=(100/3);$x++){
// 		for($z=0;$z<=100;$z++){
// 			if($x+$y+$z==100 && (($x*3)+($y*5)+($z/3))==100){
// 				echo '公鸡为:'.$x.":".'母鸡为:'.$y.":".'小鸡:'.$z."<br>";
// 			}
// 		}
// 	}
// }


// 3.（算法题）1,1,2,3,5,8,13,21,34.。。。 求第30位的数是多少，请用伪代码描述其实现方法

// $f1=1;
// $f2=1;
// For($i=3;$i<=30;$i++){
// 	$f3=$f1+$f2;
// 	$f1=$f2;
// 	$f2=$f3;
// }
// Echo $f3;



// 题目十一
// 1.（论述题）请用类屯举例描述mvc结构
	// MVC是一种设计模式中M是model模型,业务逻辑层
	//  V是视图view 主要负责用户交互层
	//  C是控制器 是连接视图和模型的桥梁,就比如一个工厂,C是老板M是工厂,V是显示给用户的产品,mvc很好的
	// Mvc优点:
	// 	低耦合性
	// 	高重用性和可使用行
	// 	较低的生命周期成本
	// 	快速的部署
	// 	可维护性

// 2.（论述题）请用简单的语言描述一下HTTP协议
	
	// HTTP协议就是客户机与服务器的请求与响应。
	// 1.首先客户机与服务器需要建立连接。只要单击某个超级链接，HTTP的工作就开始了。 　　
	// 2.建立连接后，客户机发送一个请求给服务器，请求方式的格式为：统一资源标识符（URL）、协议版本号，后边是MIME信息包括请求修饰符、客户机信息和可能的内容。 　　
	// 3.服务器接到请求后，给予相应的响应信息，其格式为一个状态行，包括信息的协议版本号、一个成功或错误的代码，后边是MIME信息包括服务器信息、实体信息和可能的内容。 　　
	// 客户端接收服务器所返回的信息通过浏览器显示在用户的显示屏上，然后客户机与服务器断开连接。 　

// 3.（扩展题）请描述一下在linux下php的编译过程

	// 1.获得源码包
	// 2.解压源码包
	// 3.使用configure检查并配置安装需要的系统环境
	// 4.Make编译源代码并生成安装文件
	// 5.Make install命令进行安装
	// 整合apache与PHP

// 4.（扩展题）请描述一下本地字节序于网络字节序的区别

// 字节序：大于一个字节的数据 ，在内存中的存放顺序。
// 本地字节序：与系统有关，不同的CPU有不同的字节序。
// 	分为两种：小尾字节序就是低位字节排放在内存的低端，
// 		高位字节排放在内存的高端。
// 	大尾字节序就是高位字节排放在内存的低端，
// 		低位字节排放在内存的高端

// 网络字节序：
// 		TCP/IP各层协议将字节序定义为大尾，
// 		因此TCP/IP协议中使用的字节序通常称之为网络字节序。




 ?>