<?php 
	include './init.php';

	// var_dump($_POST['content']);
	$redis->publish('tv1',$_POST['content']);





 ?>