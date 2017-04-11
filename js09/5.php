<?php 



	// $arr = ['小学生','蛮三刀','奥巴马','大宝剑'];
	$arr = ['name'=>'admin','name1'=>'蛮三刀'];

	// print_r($arr);
	//要返回数组时 进行处理
	// json_encode 将数组转成json格式
	$res = json_encode($arr);

	echo $res;


 ?>