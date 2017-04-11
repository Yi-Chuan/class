<?php 

//引入smarty类库文件
include './libs/Smarty.class.php';
// 创建smarty对象 
$s = new Smarty;
//初始化
//设置当前模板文件存放目录
$s->template_dir = './view';
//编译文件存放目录
$s->compile_dir = './view_c';
//当前配置文件的存放目录
$s->config_dir = './config';
//设置左右边界符
$s->left_delimiter = '{{';
$s->right_delimiter = '}}';
//开启缓存
$s->caching = true;
//缓存存放目录
$s->cache_dir = './caches';
//缓存有效时间 单位时秒
$s->cache_lifetime = 10;


//分配变量
$s->assign('title','狗蛋网');
$s->assign('content','欢迎来到狗蛋网!!!');
$s->assign('itime',time());

//解析模板
$s->display('1.html');



 ?>