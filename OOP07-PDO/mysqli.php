<?php 
//mysqli 方式链接mysql数据库  面向对象的风格  一遍

// 实例化 对象  mysqli
$m = new Mysqli('localhost','root','','lamp145');

//判断链接是否成功
if($m->connect_errno){
	die('数据库链接失败');
}

//设置字符集编码
$m->query('set names utf8');

//sql
$sql = 'select * from user';

//发送
$result = $m->query($sql);

//处理结果集
while($rows = $result->fetch_assoc()){
	var_dump($rows);
}

//关闭
$m->close();









 ?>