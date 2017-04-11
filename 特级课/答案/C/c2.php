<?php 

// 一、选择题
// 1.下面哪个表达式不能将两个字符串$s1和$s2串联成一个单独的字符串？（ A ）
// A．$s1+$s2		B.“{$s1}{$s2}”		C.$s1.$s2
// D. implode(‘’,array($s1,$s2))		E.以上所有的方法都能实现
// 2．下面的脚本运行以后，$array数组所包含的值是什么？（ B ）
// 	$array  = array(‘1’,’1’);
// 	foreach($array as $k=>$v){
// 		$v  =  2;
// }
// A.array(‘2’,’2’)	B.array(‘1’,’1’)	C.array(2,2)		D.array(Null,Null) 




// 二、问答题
// 1.写出下列代码的输出结果：
// function myfunc($argument){
// 	echo $argunment + 10;
// }
// $variable = 10;
// echo “myfunc($variable)=”.myfunc($variable);
// 10myfunc(10)=



// 2.请用尽可能少的语句实现对输出Email地址进行验证的功能
// 用正则表达式匹配
// If(preg_match(‘/\w+@\w+\.\w+/’,$str)){
// 	Echo “是邮箱”;
// }else{
// 	Echo “不是邮箱”;
// }




// 3.简述cookie和session的区别各自的工作机制，存储位置等，简述cookie的优缺点。
//  	<1>SESSION是存放在服务器端的，COOKIE是存放在客户端的
// 	<2>SESSION和COOKIE是可以设置时间长短的
// 	<3>COOKIE不安全，信息容易被盗取
// 	<4>SESSION存放在服务器端，当服务器的访问量过大时，对服务器性能有很多影响，应使用memcache存放session
// 	<5>禁止了COOKIE，SESSION是不能启动的
// 	<6>COOKIE是存放在客户端的，单个COOKIE文件不超过3K，SESSION没有限制


// 4.根据你的经验谈谈写php程序需要注意哪些问题
// 	1)代码一定要书写规范，必须加注释
// 	2)能用快捷键则用快捷键，提高效率
// 	3)字母之间空格的时候敲tab键，提高效率
// 	4)代码能有多简洁就多简洁，提高开发效率
// 	5)代码尽量不要粘贴复制，尽量手写
// 	6)能用系统函数则用系统函数，尽量不要自定义函数，否则效率会偏低
// 	7)能用字符串函数解决就不要用正则表达式，效率较低



// 5.Php是否有安全问题，如果有，请列举说明。
// 	1）session存储在服务器端，相对而言比较安全
// 	2）Cookie存储在客户端，不够安全



// 6.是否仔细阅读过php手册？请列举基本你阅读过的技术方面的书，并简要说明读后感。
// 按照实际的想法回答，主要检查你有没有学习新技术的意愿

// 三、Linux选择题:
// 1．coron后台常驻程序（daemon）用于：
// A．负责文件在网络中的共享
// B．管理打印子系统Manages theprinting subsystem
// C．跟踪管理系统信息和错误
// D．管理系统日常任务的调度（scheduing）


// 2．怎么了解您在当前目录下还有多大空间？  Du .
// A．Use df
// B．Use du /
// C．Use du.
// D．Use df.



// 3． 有一个备份程序mybackup,需要在周一至周五下午一点和晚上八点各运行次，下面哪一条crontab的项可以完成这项工作？
// A．0 13,20 * * 1,5 mybackup
// B．0 13,20 * * 1,2,3,4,5, mybackup
// C．*13,20 * *1,2,3,4,5, mybackup
// D．0 13,20 1,5 * *mybackup



// 4． 下面哪条命令可以把f1.txt复制为f2.txt？ cp f1.txt f2.txt
// A．cp f1.txt|f2.txt
// B．cat f1.txt|f2.txt
// C．cat f1.txt|f2.txt
// B．copy f1.txt|f2.txt



// 5． 使用命令可以查看Linux的启动信息？
// A．mesg –d
// B．demesg
// C．cat /etc/mesg
// D．cat /var/mesg



// 6． 在vi中退出不保存的命令？
// 	A．:qt
// 	B．:r
// 	C．:wq
// 	D．:q!


// 四、其他相关技术
// 1．如何判断SQL语句的运行效率？如何优化一个查询SQL？
	// 1)查看它的运行时间，如果时间过长则说明sql语句的执行效率很低
	// 2）尽量使用普通查询，不要使用嵌套查询
	// 3）查询时，尽量少使用*
	// 4）模糊查询时不要使用like，使用spinx查询
	// 5）给字段加索引
	// 6）可以考虑事物处理


// 2．试写出mysql数据库优化的一些方法
	// 优化SQL语句
	// 建立索引
	// 分库分表
	// 主从复制



// 3．apache默认使用进程管理还是线程管理？如何判断并设置最大连接数？
	// 默认是进程管理
	// 使用ab命令判断最大数
	// 首先使用命令Vi httpd-mpm.conf
	// 修改 MaxClients对应的值

// 4．简述smarty的工作原理，如何对smarty进行二次开发？
// 1、 smarty将php源文件，首先编译成中间文件
// 2、 如果启用缓存，再根据编译文件生成缓存文件
// 3、 之后每次访问都会访问编译文件
// 可以自己定义修改器和调节器



// 5．ajax技术利用了什么协议？简述ajax的工作机制。
// HTTP协议。简单来说，它就是调用了一个activeX发送了一个HTTP请求。
// （1）对象初始化
// （2）发送请求
// （3）服务器接收请求并进行处理
// （4）服务器返回响应数据
// （5）客户端接收
// （6）依据响应数据修改客户端页面内容


// 6．利用ajax开发时，需要考虑浏览器的兼容性么？如果需要，常需要考虑哪些？ajax开发常会遇到哪些问题，试举例说明？
// 需要考虑
// 浏览器初始化对象不同

// 一，js脚本缓存问题
// 　　二，本地调试js脚本不起作用
// 　　三，调试代码查找错误困难

// 7．利用ajax传输数据时，一般默认使用的是什么编码方式？如果出现乱码如何处理？
// 	Utf-8
// 传送端和接收端都设置成utf-8



// 四、逻辑思维
// 1.	一个人卖苹果，6元/斤的进货价，10元/斤卖出。某一天他卖了1斤苹果，收到了50元假钞，但没有发现，给客户找了40元钱零钱。请问，这人这次卖苹果亏了多少钱？
// 46元  6元的进价和40元零钱  全部46元



// 2.	一个小猴子边上有100根香蕉，它要走过50米才能到家，每次他最多搬50根香蕉，每走1米就要吃掉一根，请问它最多能把多少根香蕉搬到家里。
//     16根. 问题简化成走最短的路,背更多的水果.但路和水果之间有限制! 题目已经限制,猴子最多背50,我们计算其消耗仅剩下50根的米处, 
// 假设猴子第一次背了50根,走了X米,在回来搬第2个50根,就有: 
// 100-3X .........剩下的香蕉数(先走X,往反2X)
// 50-X ............剩下的米处 
// 问题就明白了: (100-3X)-(50-X)=50-2X ........回到家时的香蕉数 
// 问题就简化为在条件: (100-3X)<=50的情况下,求 (50-2X)的最大值! 得到: X=17时, 50-2X 最大值 16 方案: 猴子先搬50根,走17米,在回来搬50根走到17米处,回来后再搬剩下的49根走完33米,最后得到16根!




// 3.	分金条问题
// 	你让某些人为你工作了七天，你要用一根金条作为报酬。这根金条要被分成七块。你必须在每天的活干完后交给他们一块。如果你只能将这根金条切割两次，你怎样给这些工人分？
// 	切割两次，分出三块 1、2、 4。
// 第一天  付1
// 第二天  收回1，付2
// 第三天  付1（1+2）
// 第四天  收回1、2  付4
// 第五天  付1 （4+1）
// 第六天  收回1 付2（4+2）
// 第七天 付1 （4+2+1）



// 4．	有十箱苹果，里面各放苹果10个，其中9箱装的苹果是50克/只，另一箱装的苹果是60克/只，现给你一地秤，要求只称一次就能准确找到装60克/只的那箱苹果，请问如何做？
// 	先给十个箱子标上序号，然后从一号箱子拿出苹果一只，二号拿两只，以此类推....十号箱子拿十只。然后称下总重量，减去500克*倍数，余数是十的多少倍就是几号箱子中的。这样就只称了一次。




// 5.	村子中有50个人，每人有一条狗。在这50条狗中有病狗（这种病不会传染）。于是人们就要找出病狗。
// 	每个人可以观察其他的49条狗，以判断他们是否生病（如果有病一定能看出来），只是
// 自己的狗不能看。观察后得到的结果不得交流，也不能通知病狗的主人。主人一旦推算出自
// 己家的是病狗就要枪毙自己的狗（发现后必须在一天内枪毙），而且每个人只有权力枪毙自
// 己的狗，没有权力打死其他人的狗。
// 	第一天大家全看完了，但枪没有响，第二天仍没有枪响。到了第三天传来一阵枪声，问
// 村里头共有几条病狗，你如何让推算得出的？

// 答:三条病狗.原因如下分析. 
// 首先要说明的是这50个人也都不知道有多少条病狗,而是根据推论来判断自己的狗是不是病狗,并且在推论的当天就把自己的狗杀掉. 
// 1.第一天没有枪响,说明不是一条狗. 并且所有的人都可以推断出病狗数量大于等于2.因为如果是一条的话,肯定那个病狗的主人会看不见一条病狗,从而推断自己的狗是病狗,并杀掉他. 
// 2.第二天,枪依然没有响.所有的人都可以推断出病狗数量大于等于三,因为不可能是2条病狗.在第二天大家都已经知道最少有2条以上的病狗,如果是2条的话,那么那2条病狗的主人肯定只看到一条,而且他们也知道最少有2条,那么肯定会把自己的狗杀掉.所以前2天枪都没有响. 
// 3.第三天枪响了.经过了2天以后,所有的人都可以分析判定最少有三条病狗了.于是在第三天,看见2条病狗的3个主人忍痛把自己的狗杀掉了. 
// 4.不可能是4条以上的狗,因为根据推理,如果有4条狗的话,那么肯定在第四天大家才能判断出来


// 6.	不均匀分布的香，每根香烧完的时间是一小时，你能用什么方法来确定一段15分钟的时间？
// 		一支两端同时点燃烧完一支是30分，另一支只点一端烧了一半，剩下的支持30分钟，在同时点燃两端，得15分

// 五、性格测试
// 1．简单说一下，你是一个什么性格的人？
//   	主要说下团结团队，活泼开朗，和人交往没有障碍 
// 每次说完最好举个小例子


// 2．你认为你自身最大的优点和缺点是什么？
// 优点  按照实际的说 比如团结集体 活泼开朗 等
// 缺点  把不是缺点的缺点说出来就行


// 3．是否愿意在比较大的工作压力下工作？有创业公司的工作经验么？简单说一下你对创业公司的看法。
// 可以 压力越大动力越大 
// 经验 按实际去回答
// 看法：必须有明确的目标，坚持下去的精神，良好的管理团队，和团结的集体

// 4．你具体是使用什么方法来提供自身的技术（或业务）水平的？
//    逛逛技术论坛（csdn） 周末参加一些技术活动 比如：什么什么会议

// 5．说说你对本公司的了解。简单说说你理想中下面找的工作是一个什么样的工作？简单说一下离开上一个工作的原因是什么？
// 面试以前必须看看这个公司的简介 回答出这个公司的业务和特色
// 简单谈谈你应聘职业的工作内容，表达出对这份工地的兴趣和爱好
// 原因不要抱怨上个公司或者领导不好，回答自身原因多一点


// 6．如果你愿意可以选择到下面的网址进行测试：（只需要告诉我们测试的结果即可。此题可选。）
// MBTI职业性格测试
// http://www.psytopic.com/mag/post/mbti-career-personality-test-psytopic-special-edition.html



 ?>