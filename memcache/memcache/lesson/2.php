<?php
header('Content-type:text/html;charset=utf-8');
//memcache 分布式存储

//实例化memcache对象 memcache连接池
$mem = new Memcache();


//memcache 退出链接
	quit
telnet      127.0.0.1      11211

//向连接池中添加服务器
$mem->addServer('127.0.0.1', 11211);
$mem->addServer('192.168.80.52', 11211);
$mem->addServer('192.168.80.6', 11211);
$mem->addServer('192.168.80.32', 11211);
$mem->addServer('192.168.80.9', 11211);
$mem->addServer('192.168.80.23', 11211);

//添加数据
$mem->set('user1', '小艳艳', MEMCACHE_COMPRESSED, 3600);
$mem->set('user2', '小翠翠', MEMCACHE_COMPRESSED, 3600);
$mem->set('user3', '小莉莉', MEMCACHE_COMPRESSED, 3600);
$mem->set('user4', '小静静', MEMCACHE_COMPRESSED, 3600);
$mem->set('user5', '小芳芳', MEMCACHE_COMPRESSED, 3600);

echo "user1 : ".$mem->get('user1')."<br>";

echo "<hr>";
echo $mem->getServerStatus('192.168.80.52', 11211);
echo "<hr>";
var_dump($mem->getExtendedStats());


//关闭连接
$mem->close();