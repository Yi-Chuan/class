<?php 
	
	//实例化对象
	$m = new Memcache();

	//连接memcache服务器
	// $m->connect('127.0.0.1','11211');
	
	$m->addServer('127.0.0.1','11211');
	$m->addServer('192.168.2.10','11211');

	//写入缓存
		// $res = $m->set('name','xiaohigh',MEMCACHE_COMPRESSED,20);

		// $arr = array('篮球','足球','乒乓球','羽毛球');
		// $res = $m->set('name',$arr,MEMCACHE_COMPRESSED,0);

		// class Meinv{
		// 	public $name = 'xiaoxiao';
		// 	public $age = '18';
		// 	public $height = '170cm';
		// }
		// $ms = new Meinv();
		// $res = $m->set('meinv',$ms,MEMCACHE_COMPRESSED,0);	
	// var_dump($res);

	$arr = $m->get('meinv');

	var_dump($arr);


 ?>