<?php 

	include './init.php';
	//同时监听TV1  TV2

	$redis->subscribe(array('tv1','tv2'),'callback');

	function callback($redis,$tv,$content){
		echo $tv;
		echo ':';
		echo $content;
		echo '<br>';
		exit();
	}



 ?>