<?php 
// memcache 分布式缓存 

//实例化memcache对象
$m = new Memcache();

//向连接池中添加服务器
$m->addServer('127.0.0.1',11211);
$m->addServer('192.168.148.71',11211);
$m->addServer('192.168.148.33',11211);
$m->addServer('192.168.148.32',11211);
$m->addServer('192.168.148.54',11211);


//添加数据
$m->set('user1','张三',MEMCACHE_COMPRESSED,3600);
$m->set('user2','李四',MEMCACHE_COMPRESSED,3600);
$m->set('user3','王五',MEMCACHE_COMPRESSED,3600);
$m->set('user4','赵六',MEMCACHE_COMPRESSED,3600);
$m->set('user5','田七',MEMCACHE_COMPRESSED,3600);
$m->set('user6','孙八',MEMCACHE_COMPRESSED,3600);

//获取数据
echo $m->get('user1').'<br>';
echo $m->get('user2').'<br>';
echo $m->get('user3').'<br>';
echo $m->get('user4').'<br>';
echo $m->get('user5').'<br>';
echo $m->get('user6').'<br>';
	




 ?>