<?php 
/*
final 关键字 	最终 常量

只能用来修饰类和成员方法 不能修饰成员属性
被final修饰的类不能被继承

被final修饰的成员方法 不能被子类覆盖(重写)
*/
	//父类
	// final class A
	class A
	{
		//final可以和ppp修饰符一起来修饰方法
		// final public function func()
		public function func()
		{
			echo '你好';
		}
	}

	//子类
	class B extends A
	{
		public function func()
		{
			echo '今天天气不错';
		}
	}

	// $b = new B();

	// $b->func();
	//已经定义的类不能重新定义
	// class A{}

final class User
{
	public function login($username,$password)
	{
		if($username == 'admin' && $password == '123456'){
			echo '登录成功';
		}else{
			echo '用户名或密码错误';
		}
	}
}

// $u = new User();

class Users extends User
{
	public function login($user,$pass)
	{
		echo '登录成功';
	}
}


$u = new Users();

$u->login('admin','1234');




?>