<?php 

//php只支持单继承
/*
	一个子类只能有一个父类,不允许继承多个类
	但一个类可以被多个子类继承,可以有多层继承
	如果B类继承了A类,c类又继承B类,C类就间接继承了A类,
		同时拥有了A类和B类的成员属性和成员方法


	如果需要使用多个类的功能,可以使用链式继承
	class A extends B{}
	class B extends C{}
	class D extends A{}
*/


class PHP extends JAVA
{
	public function pcode()
	{
		echo '我可以编写php代码了';
	}
}

class JAVA
{
	public function jcode()
	{
		echo '可以编写java代码';
	}
}

class Stu extends PHP
{

}

$a = new Stu();

$a->pcode();
$a->jcode();







?>