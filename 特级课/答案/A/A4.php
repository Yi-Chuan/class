<?php 

1. 用二分法查找一个长度为10的排好序的线性表，查找不成功时最多需要比较次数是      （5分）
	

2. 从0,1,2,3,4,5,6,7,8,9，这十个数字中任意选出三个不同的数字，“三个数字中不含0和5”的概率是                     （5分）
(8*7*6)/(10*9*8)    


3. 一个三角形三个顶点有3只老鼠，一声枪响，3只老鼠开始沿三角形的边匀速运动，请问他们相遇的概率是                     （5分）



4. 写出匹配邮箱地址的正则  （5分）


// 5. 写出如下程序的输出结果（5分）
$str1 = null;
$str2 = false;
echo $str1==$str2 ? '相等' : '不相等';
$str3 = '';
$str4 = 0;
echo $str3==$str4 ? '相等' : '不相等';
$str5 = 0;
$str6 = '0';
echo $str5===$str6 ? '相等' : '不相等';


//1.  写出5个以上你所知道的常用的Linux命令和它的功能（5分）

cat，显示文件内容。
cd，改变目录路径。
cp，复制文件。
find，查找文件。
grep，搜索、过滤信息。
ls，列出目录信息。
more，分页显示。
rm，删除文件或目录。
vi，调用vi文本编辑器。
who，显示登录用户信息


//2. HTTP/1.0 中，状态码 200 301 304 403 404 500的含义（5分）
	
200 - 服务器成功返回网页
301(永久移动)请求的网页已永久移动到新位置。
304(未修改)自从上次请求后，请求的网页未修改过
403(禁止)服务器拒绝请求
404 - 请求的网页不存在
503 - 服务器超时
	
// 3. 请写出以下html标签的含义：input form script style table b img （7分）

// 4. 写出PHP(或其他语言)的public、protected、private三种访问控制模式的区别？（3分）

// 5. 请描述 PHP(或其他语言) Session 的运行机制,大型网站中Session方面应注意什么？（5分）

第一次访问 
session_start();//生成临时文件 会向浏览器写一个cookie PHPSESSID='字符串'
tmp文件名的后缀名称
第二次访问
把PHPSESSIONID传过来--session文件名

$_SESSION['JINGSHUI']='SHACHA';

清空session

1.unset ()销毁sessin变量 内存中删除
2.session_destory();删除文件指定文件
3.setCookie(session_name(),'',time()-1,'/');清空客户端的cookie值		
/*
运行机制:
	客户端将session id传递到服务器，
	服务器根据session id找到对应的文件，
	读取的时候对文件内容进行反序列化就得到session的值，
	保存的时候先序列化再写入
注意:
	1,session在大访问量网站上确实影响系统性能，
		影响性能的原因之一由文件系统设计造成，
		在同一个目录下超过10000个文件时，
		文件的定位将非常耗时,
		可以通过修改php.ini中session.save_path设置两级子目录 ,
		session将存储在两级子目录中，
		每个目录有16个子目录[0~f]，
		不过好像PHP session不支持创建目录，
		你需要事先把那么些目录创建好 。
	3,session同步问题,session同步有很多种，
		如果你是存储在memcached或者MySQL中，
		那就很容易了，指定到同样的位置即可,
		还有一种方法就是在负载均衡那一层保持会话，
		把访问者绑定在某个服务器上，
		他的所有访问都在那个服务器上就不需要session同步了
*/

		
// 6. 简单描述mysql中，索引，主键，唯一索引，联合索引的区别，对数据库的性能有什么影响(从读写两方面)（5分）
/*
	索引就相当于对指定的列进行排序,排序有利于对该列的查询，
		可以大大增加查询效率
	建立索引也是要消耗系统资源,所以索引会降低写操作的效率
	主键,唯一,联合都属于索引
	主键属于唯一索引,且一个表只能有一个主键,主键列不允许空值
	唯一索引可以一个表中可以有多个,而且允许为空,列中的值唯一
	多个字段的多条件查询多使用联合索引
*/
// 7. MySQL 数据库中 varchar和char的主要区别是什么，哪种查询效率更高，为什么？（5分）

varchar变长字符串,char定长字符串
Char效率更高,由于不需要对储存空间计算后在存储,所以效率更高

// 8. 解释MySQL外连接、内连接与自连接的区别（5分）

外连接分为左连接和右连接 左连接是以左表作为条件查询关联右表数据,无对应数据则补空,右连接则相反
内连接(inner join.....on)是做关联查询时,内连接的特性是只显示符合连接条件的记录
自连接:在FROM clause（子句）中我们可以给这个表取不同的别名，
然后在语句的其它需要使用到该别名的地方用dot（点）来连接该别名和字段名

// 9. javascript 包括那些基本数据类型？（5分）

// 10. 用css、html编写一个两列布局的网页，右侧固定宽度200px，左侧自适应（5分）

//项目设计（13分）

读写分离,读写服务器比例10:1,使用分页查询减少数据库压力,静态化分页后使用memcache分布式缓存,减少i/o开销和数据压力,增删改时删除对应的静态化数据,通过查询分页,分开静态化对应的分页信息缓存,数据库分库分表分区,使用lvs负载均衡,活跃和不活跃的文章进行分表存储,提高数据库中文章查询
效率,建立联合索引,提高查询效率,使用中文分词技术提高文章内容的查询效率


// 编写程序（请任选两题）（2*6分=12分）

// 1. 描述顺序查找和二分查找（也叫做折半查找）算法，顺序查找必须考虑效率，对象可以是一个有序数组
顺序查找是在一个已知无序队列中找出与给定关键字相同的数的具体位置。
原理是让关键字与队列中的数从第一个开始逐个比较，直到找出与给定关键字相同的数为止。

/*
  二分查找法
  前提是:这个数组已经从小到大排好了
  给一个值,找出来,告诉我它的下标
*/
$arr = [17,23,25,29,33,37,40,43,45];
var_dump(fen($arr,33,0,8));
/**
* 功能: 在数组中查找一个值
* 参数: $arr  在哪儿查
*       $val  查什么值
*       $left  左边从哪儿开始
*       $right 右边到哪儿结束
*
* 返回: 成功返回下标
*       失败返回false
*/
function fen($arr,$val,$left,$right){
	$p = ceil(($left+$right)/2);   
	//如果左下标大于右下标,就意味着没找到
	if($left>$right){
	 return false;
	}     
	//如果相等,把下标返回
	if($val==$arr[$p]){
	 return $p;
	}     
	//如果要找的值小于中间值
	if($val<$arr[$p]){
	return  fen($arr,$val,$left,$p-1);
	}
	//如果要找的值大于中间值
	if($val>$arr[$p]){
	return fen($arr,$val,$p+1,$right);
	}
      
}

//2.假设有"123<em>abc</em>456<em>def</em>789"这么一个字符串,写一个函数，可以传入一个字符串，和一个要截取的长度。返回截取后的结果。
$str='123<em>abc</em>456<em>def</em>789';

//1.把字符变成可操作的单元
preg_match_all('/<em>|<\/em>|./',$str,$arr);

$temp=[];//存储字符数组
$n='a';//存储<em> </em>的下标	
$key=[];//记录<em> 和</em>出现的次数
$j=0;//控制搜索范围

foreach($arr[0] as $k=>$v){	
	//3.控制遍历的范围
	if($j==8) break;
	//2.将单元压入临时数组中 并区分正常截取字符和em标签
	if($v=='<em>' || $v=='</em>'){
		$temp[$n]=$v;
		$key[]=$n;
		$n++;
	}else{
		$temp[$k]=$v;
		$j++;
	}	
}
//4.如果key单元是基数 去除最后一个单元em
if(count($key)%2!=0){
	unset($temp[$key[count($key)-1]]);
}
//5.拼接输出
echo implode('',$temp);

----------------------------------------------

//猴子选大王
function houzi($m,$n){
	for($i=1;$i<=$m;$i++){
		$arr[] = $i;
	}
	$i = 0;
	while(count($arr)>1){
		if(($i+1)%$n==0){
			unset($arr[$i]);
		}else{
			array_push($arr,$arr[$i]);
			unset($arr[$i]);
		}
		$i++;
	}
	echo $arr[$i];
}

// function monkeyKing($n, $m) {    //$n为猴子总数,$m为剔除猴子步长
// 	$s = 0;    //$s为大王坐标,只有一只猴子时,大王坐标为0
//  	for($i = 2; $i <= $n; $i++) {    //依次向后递推,求到共有$n只猴子,剔除步长为$m时的大王坐标
//     	$s = ($s + $m) % $i;    //大王坐标递推公式
//  	}
//  	return $s;
// }

//4. 翻转字符串中的单词，字符串仅包含大小写字母和空格，单词间使用空格分隔。
function myrev($str){
	$arr = explode(' ',$str);
	$num = count($arr);
	for($i = 0; $i < $num/2; $i++){
		$temp = $arr[$i];
		$arr[$i] = $arr[$num-$i-1];
		$arr[$num-$i-1] = $temp;
	}
	return implode(' ',$arr);
}
$str = 'This is PHP';
echo myrev($str);



 ?>