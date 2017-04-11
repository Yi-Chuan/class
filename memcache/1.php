<?php 


//实例化Memcache
$m = new Memcache();

//连接Memcache
$m->connect('127.0.0.1','11211');
//添加一台memcache服务器到连接池中
// $m->addServer('127.0.0.1','11211');


class Demo
{
	public $name = 'zhangsan';
	public $age = 20;
}

$s = new Demo;
// var_dump($s);
$arr = ['red','pink','blue'];
//保存数据 键名   键值    选择压缩    存储时间
$m->set('name',$s,MEMCACHE_COMPRESSED,60);

//  O:4:"Demo":2:{s:4:"name";s:8:"zhangsan";s:3:"age";i:20;}
//  a:3:{i:0;s:3:"red";i:1;s:4:"pink";i:2;s:4:"blue";}

//获取数据
$res = $m->get('name');
echo '<pre>';
var_dump($res);
echo '</pre>';
//清除所有数据
// $m->flush();






 ?>