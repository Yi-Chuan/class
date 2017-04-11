<?php 

	// $arr = [1,2,3,4,5,6,7];

	// var_dump($arr);

	//在本地脚本中 向远程服务器发起请求
	// $con = file_get_contents('http://www.baidu.com');
	// file_put_contents('a.txt',$con);

	//curl专门在脚本中向远程服务器发起请求的 模拟浏览器向服务器发请求
	// echo $con;

	// phpinfo();die;

	//1.初始化，创建一个新cURL资源

	$ch = curl_init();
	 
	//2.设置URL和相应的选项
	 
	curl_setopt($ch, CURLOPT_URL, "http://www.baidu.com");
	 
	curl_setopt($ch, CURLOPT_HEADER, 0);
	 
	//3.抓取URL并把它传递给浏览器
	 
	curl_exec($ch);
	 
	//4.关闭cURL资源，并且释放系统资源
	 
	curl_close($ch);





 ?>