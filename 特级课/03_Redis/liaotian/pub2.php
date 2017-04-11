<?php 
	include './init.php';

	$redis->publish('tv2',$_POST['content']);

 ?>