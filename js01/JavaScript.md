#JavaScript课堂笔记


## 什么是JavaScript?
	人们通常所说的JavaScript，其正式名称为ECMAScript。这个标准由ECMA组织发
	展和维护。ECMA-262是正式的JavaScript标准。这个标准基于网景（Netscape）
	公司提出的JavaScript语言和微软提出的JScript语言。

<font color="red">
	JavaScript是一种基于对象（Object）和事件驱动（Event Driven）并具有安全性能的脚本语言。使用这种语言的目的是：与Web客户交互作用，美化页面等。
</font>
	
	JavaScript一种直译式脚本语言，是一种动态类型、弱类型、基于原型的语言，
	内置支持类型。它的解释器被称为JavaScript引擎，为浏览器的一部分，
	广泛用于客户端的脚本语言，最早是在HTML（标准通用标记语言下的一个应用）
	网页上使用，用来给HTML网页增加动态功能。Node.js。

	在1995年时，由Netscape公司的Brendan Eich(布兰登·艾奇)，
	在网景导航者浏览器上首次设计实现而成。
	因为Netscape与Sun合作，Netscape管理层希望它外观看起来像Java，
	因此取名为JavaScript。但实际上它的语法风格与Self及Scheme较为接近。
	为了取得技术优势，微软推出了JScript，CEnvi推出ScriptEase，
	与JavaScript同样可在浏览器上运行。

	发展初期，JavaScript的标准并未确定，同期有Netscape的JavaScript，微软的
	JScript和CEnvi的ScriptEase三足鼎立。1997年，在ECMA（欧洲计算机制造商协
	会）的协调下，
	由Netscape、Sun、微软、Borland组成的工作组确定统一标准：ECMA-262。

##JavaScript特点
	1.JavaScript是一种脚本编程语言，也是一种解释性语言。
	2.JavaScript的语法基本结构形式与C++、Java十分类似。
	3.JavaScript是一种基于对象的语言。
	4.JavaScript具有跨平台性。JavaScript是依赖于浏览器本身，与操作环境无关，
		只要能运行浏览器的计算机，并支持JavaScript的浏览器就可正确执行。
	5.安全性与简单性。

##JavaScript程序运行开发环境
	1.Netscape Navigator 3.0 或 Internet Explorer 3.0及以上版本。

	2.用于编辑HTML文档的字符编辑器。

	注意：JavaScript的程序是通过客户端浏览器来解析的，他的解析与Web服务器无关。
	(它的解释器被称为JavaScript引擎，为浏览器的一部分)

##JavaScript的优点与局限
	优点：
	1.使用JavaScript可以在客户端进行数据验证，节省服务器端的资源。

	2.可以方便地操纵各种页面中的对象，使网页更加友好。

	3.使多种任务仅在客户端就可以完成而不需要网络和服务器的参与，
		从而支持分布式的运算和处理。

	局限：
	1.兼容性。互联网上有很多浏览器，如 IE FireFox Chrome Safari Opera等，
		但各种浏览器支持JavaScript的程度是不一样的，
		所以各个浏览器运行JavaScript的效果会有一定的差距，有时甚至会显示不出来。
	
	2.JavaScript不能打开、读写和保存用户计算机上的文件

#JavaScript基础语法

##JavaScript使用场景
	js代码可以和html进行混排 注意正确嵌套 一般script标签放置在head或body
	HTML不会报错  js也不会像php一样简单粗暴的抛出错误,
	它 比较委婉  需要工具才能查看 (F12调用浏览器的调试工具)

		script标签 (注意正确嵌套)
		外部引入 (注意在有src属性的script标签中 不能写js代码)
		元素的事件属性 
		a标签的href属性

##变量的定义
	字母数字下划线($)
	首字母不能为数字
	严格区分大小写
	且不能使用关键字 if  else true 

##注释和分隔符
	//单行注释
	/*多行注释*/
	
	;
	js使用分号作为一个语句的结尾,
	如果省略了分号,那就有解析器来确定语句的结尾,默认以换行作为语句的结尾
	

##数据类型
	 布尔类型   boolean
	 字符串     string
	 数字类型   number
				整型,浮点,NaN

	 对象       object
				Object Array null

	 函数类型   function
	 未定义的   undefined 

##数据类型转换
###强制类型转化
	转化成数字
		parseInt
			如果是纯数字的话 则直接返回数字类型的值
			如果首字母是数字,则截取到第一个不是数字之前的数字返回
			如果首字母不是数字,返回NaN
		parseFloat
			规律跟parseInt一致
		Number
			纯数字转化成数字 如果中间有非数字 则直接返回NaN
			true=>1   false => 0
	转化成字符串
		String
	转化成布尔类型
		Boolean
		js为假的几种情况:
			0 0.0 '' NaN undefined null false
###自动类型转化
	计算
	if

##运算符	
	算字赋比逻位他
	注意: + js中的加号是一个特殊的运算符,如果都是数字进行运算,如果时字符串进行连接

##流程控制
	if else
		else if中间必须要加空格

	switch
		case的值必须要全等于才可以匹配上
	case 6:
	case 7:

##循环控制
	for
	while
		循环体中的代码一定要向着脱离条件的方法发展
	continue
	break

##扩展
	元素的获取
		document.getElementById('id');
	动态修改样式
		obj.style.background = 'red';

=================================================================

#JavaScript函数与对象

##对象

###对象声明方式
	1,new Object()
	2,{} 注意逗号的使用
	3,构造函数 注意分号的使用

###元素的操作
	.
	[]

###对象的遍历
	for  in
	
	with简便操作

##函数

###函数的声明方式
	1,function func(){}
	2,var func = function(){}
	3,var func = new　Function('x','y',alert(x+y))　

###函数的调用
	代码中直接调用
	事件触发
	赋值给一个变量
	a链接

###注意事项
	优先级
		在js中定义变量的时候 不能跟函数名 冲突 否则会覆盖函数

	参数
		参数的初始值
		声明函数的时候不要给参数设置初始值

	参数的个数
		调用函数的参数多或者少
			1,如果函数调用的参数个数多于函数声明的参数个数,多于的参数将被'忽略'
			2,如果函数调用的参数个数少于函数声明时的参数个数,
				那么没有传递的参数默认是undefined

	参数可有可无
		获取参数列表   arguments

	返回值
		如果不使用return返回一个值的话 那么函数的默认返回值是undefined
		可以返回一个函数

	作用域
		变量作用域
			javascript代码是相通的	
			函数外面定义的变量是全局变量，函数内可以直接使用。
			在函数内部没有使用var定义的=变量则为全局变量，
			*在函数内使用var关键字定义的变量是局部变量，即出了函数外边无法获取。
		
##扩展
	启动定时器
		setTimeout()  单次定时器 在指定的毫秒数后调用函数或计算表达式
		setInterval() 多次定时器  按照指定的周期（以毫秒计）来调用函数或计算表达式
	清除定时器
		clearTimeout() 取消由 setTimeout() 方法设置的 timeout
		clearInterval() 取消由 setInterval() 设置的 timeout

===================================================================












