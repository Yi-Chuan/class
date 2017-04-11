<?php 
	//引入类文件
include "config.php";
include "DB.class.php";
include "Page.class.php";

//创建模型
$goods = new DB('goods');

//获取总数
$count = $goods->count();

//分页对象
$page = new Page($count,16);

//获取limit // 0,16  16,16
$limit = $page->getLimit();

//模型查询数据库
$result = $goods->limit($limit)->select();
// var_dump($result);

//返回给ajax
echo json_encode($result);


 ?>