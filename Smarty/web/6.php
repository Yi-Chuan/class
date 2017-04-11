<?php 
//引入smarty
include './libs/Smarty.class.php';

//实例化 创建 smarty对象
$s = new Smarty();

//初始化
//设置当前模板文件存放目录
$s->template_dir = './view';
//当前配置文件的存放目录
$s->config_dir = './config';



//分配普通变量
$s->assign('title','内置函数');



//解析模板
$s->display('7.html');



 ?>