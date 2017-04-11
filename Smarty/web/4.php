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

//语言的获取
$l = !empty($_GET['l']) ? $_GET['l'] : 'cn'; 

//分配普通变量
$s->assign('l',$l);



//解析模板
$s->display('4.html');



 ?>