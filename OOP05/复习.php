<?php 

class 类名{

	//成员属性
	PPP

	//成员方法
	$this 当前这个对象

	构造方法 __construct()
		$this->

	析构方法  __destruct()
}

PPP

music == gusic
g == __get(属性名)
u == __unset(属性名)
s == __set(属性名,属性值)
i == __isset(属性名)
c == __call(方法名,参数列表)

继承
 class A extends 父类名{}

 PPP

 当子类出现了与父类同名的方法  对父类方法的覆盖 重写
 parent::父类方法名()
 
	$this->private = 20;

 php 单继承


final 最终
 修饰类和成员方法

static
	静态

	访问形式:
		在类的外部  类名::$属性名  类名::方法名()
		在类的内部  self::$属性名  self::方法名()

	静态方法中不能使用$this
	不能访问其它非静态的成员
	静态的成员属性 是最为该类对象的公有属性存在的

单态设计模式(单例 单件)
	1,阻止在类的外部实例化对象
		将构造方法 私有化

	2,在类的内部声明一个方法 创建对象	
		声明静态方法来创建对象
			判断是否拥有对象 
			如果有 直接给你
			没有,就创建,存起来给你

	3,将创建的对象 存档 作为依据
		声明静态属性存放对象

const 定义类常量
	const 常量名 = 常量值

	在类的内部 self::常量名
	在类的外部 类名::常量名

instanceof 操作符 滴血认亲 

检测当前对象是否属性某一个类或者该类的后辈类实例化的结果

类型约束
 数组   对象
 array  类名  抽象类名 接口名

串行化 serialize 反串行化 unserialize
__sleep()          __wakeup()

clone 克隆
$a = clone $b;
$a = $b;//起别名 &

	__clone

__toString
	return 'zifuc';

__autoload($name) 魔术函数





	

	


 ?>