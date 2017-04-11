<?php 
// echo '222';
//引入smarty
include './libs/Smarty.class.php';

//实例化 创建 smarty对象
$s = new Smarty();

//初始化
//设置当前模板文件存放目录
$s->template_dir = './view';
//当前配置文件的存放目录
$s->config_dir = './config';

$like = 'ertyuiopdfghjkl;s。插件实际就是一些自定义的函数。
	5. 模板中可以使用if/elseif/else/endif。在模板文件使用判断语句可以非常方便的对模板进行格式重排。
	不适合使用Smarty的地方
	需要实时更新的内容。例如像股票显示，它需要经常对数据进行更新，这类型的程序使用smarty会使模板处理速度变慢。
	小项目。小项目因为项目简单而美工与程序员兼于一人的项目，使用Smarty会在一定程度上丧失PHP开发迅速的优点。
	（PS：不过为了整个项目的规范，请大家尝试去使用模板引擎。其实习惯了，开发速度会更加快，
	以上是没有用习惯模板引擎的开发者遇到的问题）';

//分配普通变量
$s->assign('title','模板解析');
$s->assign('str','iloveyou');
$s->assign('username','zhangsan');
$s->assign('like',$like);
$s->assign('l','ccccc');



//解析模板
$s->display('5.html');



 ?>