<?php
header('Content-type:text/html;charset=utf-8');
//php 操作memcache

//实例化memcache对象
$mem = new Memcache();

//连接memcache服务器
$mem->connect('127.0.0.1', 11211);

//向memcache添加一条缓存记录  只能添加不存在的 缓存记录
$mem->add('username', '小艳艳', MEMCACHE_COMPRESSED, 3600);
//修改缓存记录 只能修改不能添加
$mem->replace('username', '翠翠', MEMCACHE_COMPRESSED, 3600);
//set 既可以添加 又 可以修改  推荐使用
$mem->set('userage', 119, MEMCACHE_COMPRESSED, 3600);
$mem->set('userage', 109, MEMCACHE_COMPRESSED, 3600);

//读取缓存
echo "username : ".$mem->get('username').'<br>';
echo "userage : ".$mem->get('userage').'<br>';

//删除 删除指定的
//$mem->delete('username');
//删除所有的
//$mem->flush();

echo "<hr>";
echo "username : ".$mem->get('username').'<br>';
echo "userage : ".$mem->get('userage').'<br>';

echo "<hr>";

var_dump($mem->getStats());
echo "Memcache的版本 : ".$mem->getVersion()."<br>";

//关闭连接
$mem->close();