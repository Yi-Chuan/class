<?php 
	// 1,链接数据库
	mysqli_connect('localhost','root','')
	
	// 2,选择库
	mysqli_select_db($this->link,'LAMP145')

	// 3,设置字符集
	mysqli_set_charset($this->link,'utf8');

	// 4,准备sql语句

	// 5,发送sql语句
	 mysqli_query($this->link,$sql);

	// 6,提取数据
	 mysqli_fetch_assoc($res); ||  mysqli_insert_id($this->link);

	//7 释放结果集
	 mysqli_free_result($res);

	//8 关闭数据库
	 mysqli_close($this->link);

	// 封装一个类
		// 类名 DB 
	// 实现 增 删 改  查
	
	
	 // 参数
	 		// 表名

	 // 事例
	 $user = new DB('user');

	 /*
		成员属性的作用 就是供各个成员方法来回调用
		如果有一个值,需要各个方法来回使用,那就定义为成员属性
	 */

	// 单条查询
		// 方法名 find
		select * from user where id = ?
		参数
			主键
	// 事例
		$user->find(2);


	// 多条查询
		// 方法名 select 
		select * from user 


	// 添加数据
		// 方法名 insert add
		insert into user(username,password) values('伊川','admin')

	// 修改
		// 方法名 update save
		update user set username = 'admikn',password = '123456' where id = ?

	// 删除
		// 方法名 delete  del
		delete from user where id = ?

	
	




 ?>