<?php 

	26：以下哪种错误类型无法被自定义的错误处理器捕捉到?	
		A、E_WARNING
		B、E_USER_ERROR
		C、E_PARSE
		D、E_NOTICE

	以Apache模块的方式安装PHP，在文件http.conf中
		首先要用语句 LoadModule ____动态装载PHP模块，
		然后再用语句__ AddType application/x-httpd-php .php__
		使得Apache把所有扩展名为php的文件都作为PHP脚本处理。

	13、__ debug_backtrace ___函数能返回脚本里的任意行中调用的函数的名称。
		该函数同时还经常被用在调试中，用来判断错误是如何发生的。__FUNCTION__

		__FILE__
		__LINE__
		__CLASS__
		__METHOD__

	$num = 10;
　　function multiply(){
		$num = $num * 10;
　　}
　　multiply();
　　echo $num;  //10

// 7、不断在文件hello.txt头部写入一行“Hello World”字符串，要求代码完整(10分)
		$f = fopen("hello.txt","r");
		$str="";
		while($s=fread($f,1024)){
			$str.=$s;
		}
		fclose($f);
		
		echo $str;

		$str = "Hello World\n".$str;
		//写回去
	// /请将2维数组按照name的长度进行重新排序，按照顺序将id赋值(从1开始)。(15分)
	$tarray = array(
		array('id' => 0, 'name' => '123'),
		array('id' => 0, 'name' => '1234'),
		array('id' => 0, 'name' => '1235'),
		array('id' => 0, 'name' => '12356'),
		array('id' => 0, 'name' => '123abc')
	);

	


	usort($tarray,"fun"); //自定义
	function fun($a,$b){
		return strlen($b['name'])-strlen($a['name']);
	}
	//重排id的值
	foreach($tarray as $k=>$v){
		$tarray[$k]['id']=$k+1;
	}
	var_dump($tarray);
	//或
	//foreach($tarray as $k=>&$v){
	//	$v['id']=$k+1;
	//}


	// 66、PHP如何执行shell的两种方式
	 // 函数：shell_exec()或  exec()  ``

	// 11、什么是数据库索引，主键索引，唯一索引的区别，索引的缺点是什么？
	聚集索引和非聚集索引


	计算某个表新插入记录的id值（id为主键），不用mysql本身的自增id策略而采用memcached，假设key值不会丢失，请指出方法2错在哪里。
		方法1：
		$lastInsertId = $memcacheObj->increment($key);
		return $lastInsertId;

		方法2：
		$lastInsertId = $memcacheObj->get ($key);
		$lastInsertId++；
		$memcacheObj->set($key，$lastInsertId);  //set方法缺少参数
		return $lastInsertId;

	6、请用php写出以下程序：假设网络中有一台服务器192.168.1.101,
		开放端口8899进行侦听,请用php的socket相关知识,写出一个简易的client,
		连接到server,并发送字符串”helloserver!”.
		程序仅对连接的成功和失败进行简易错误判断和处理即可.（10分）
		//判断是否支持	udp  
		if( //If
		        function_exists('socket_create') AND //判断socket_create函数是否存在
		        $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP) AND //创建一个socket
		        $sock_data = socket_connect($sock,"192.168.1.101", 8899) //连接socket服务
		 ){  //Then
		        $sock_data = socket_set_option($sock, SOL_SOCKET, SO_BROADCAST, 1); //设置
				$msg="helloserver!";
		        $sock_data = socket_write($sock, $msg, strlen($msg)); //发送数据
		        socket_close($sock); //关闭socket
		        echo "发送成功！";
		 }else{
		        echo "连接或发送失败！";
		 }



 ?>