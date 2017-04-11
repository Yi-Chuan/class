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
	//开启缓存
	$s->caching = true;
	//缓存存放目录
	$s->cache_dir = './caches';
	//缓存有效时间 单位时秒
	$s->cache_lifetime = 10;


$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');

$stmt = $pdo->query('select * from user');

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);


//分配普通变量
$s->assign('title','内置函数');
$s->assign('user',$res);
$s->assign('total',88);

/*
	占位内容
	{block name="content"}
		aaaaaaaaaaaaaaaaaa
	{/block}
	//把当前内容插入到主模板后面
	{block name="content" append}
		aaaaaaaaaaaaaaaaaa
	{/block}
	//把当前内容插入到主模板前面
	{block name="content" prepend}
		aaaaaaaaaaaaaaaaaa
	{/block}
	
 */

//解析模板
$s->display('9.html');



 ?>