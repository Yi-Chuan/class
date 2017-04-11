<?php
header('Content-type:text/html;charset=utf-8');
//memcache 存储什么类型的数据

//实例化memcache对象
$mem = new Memcache();

//连接memcache服务器
$mem->connect('127.0.0.1', 11211);

//存储数据
$mem->set('message', 'hello, yanyan,', MEMCACHE_COMPRESSED, 3600);
$mem->set('b', true, MEMCACHE_COMPRESSED, 3600);
$mem->set('num', 100, MEMCACHE_COMPRESSED, 3600);
$mem->set('list', array('cuicui', 100, 'name'=>'艳艳'), MEMCACHE_COMPRESSED, 3600);
$mem->set('obj', new User(), MEMCACHE_COMPRESSED, 3600);


//读取数据
var_dump($mem->get('message'));
var_dump($mem->get('b'));
var_dump($mem->get('num'));
var_dump($mem->get('list'));
var_dump($obj = $mem->get('obj'));
$obj->getMessage();

//定义类
class User
{
	private $name = "艳艳";
	public function getMessage()
	{
		echo "我的名字是：".$this->name."<br>";
	}
}

//关闭连接
$mem->close();