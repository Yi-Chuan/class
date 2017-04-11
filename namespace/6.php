<?php 

	//创建简单命名空间
	namespace one;
	class MeiNv{}

	//创建多层空间
	namespace one\two;
	class MeiNv{}

	//相对路径
	$m = new three\MeiNv();//(非完全限定名称)
	var_dump($m);
	echo '<hr>';


	//创建多层空间
	namespace one\two\three;
	class MeiNv{}

	//在当前空间下直接使用类 
	$meinv = new MeiNv();//(非限定名称)
	var_dump($meinv);


	//使用绝对路径方式的命名空间
	$m = new \one\MeiNv();// (完全限定名称)
	$m = new \one\two\MeiNv();
	var_dump($m);




 ?>