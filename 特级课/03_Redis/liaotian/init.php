<?php 

	//实例化对象
	$redis = new Redis();
	//链接redis
	$redis->connect('127.0.0.1');
	//使用密码授权
	// $redis->auth('123');

	//进行其它操作
	// echo $redis->get('name');




 ?>