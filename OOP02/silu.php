<?php 


	//对数据库进行增 删 改 查

	//Model.class.php
	/*
	事例:
		$user = new Model('user');
		$arr = ['username'=>'admin','password'=>'admins','email'=>'admin@qq.com'];
		//添加
		$id = $user->add($arr);
		
		//删除
		$user->delete(12);

		$arr = ['id'=>12,'username'=>'admin','password'=>'admins','email'=>'admin@qq.com'];
		//修改
		$num = $user->update($arr);

		//查询
		$res = $user->find(12);

		//全查询
		$res = $user->select();

	*/

	//1,链接数据库
	$link = mysqli_connect('localhost','root','') or die();

	//2,设置字符集
	mysqli_set_charset($link,'utf8');

	//3,选中库
	mysqli_select_db($link,'lamp157');

	//4,准备sql语句
	$sql = 'select * from user';

	//5,执行sql
	$res = mysqli_query($link,$sql);

	//6,判断

	//7,提取
	mysqli_fetch_assoc($res);

	//释放结果集
		mysqli_free_result($res);

	//8,关闭数据库
	mysqli_close($link);