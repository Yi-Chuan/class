<?php 

/*
php中的类型约束
只能约束两种数据类型 (复合类型)
	数组 (array)  对象(类名,抽象类名,接口名)

//限制传递的参数的数据类型
// function love(array $a)//限制传递的数据 必须时数组类型
// function love(Demo $abc)//限制必须是Demo类或Demo类的后辈类实例化结果的对象
// function love(string $abc)//php7的环境 可以约束字符串
// function love(int $abc)//php7可以约束 整型
// function love(float $abc)//php7可以约束 浮点类型 传递整型之后 类型变成了浮点
// function love(bool $abc)//php7 可以约束布尔类型,对象,null 不能作为布尔类型
*/
//限制数组类型
function func(array $abc)
{
	var_dump($abc);
}
$arr = array(1,2,3,4);
// func(121);
// func($arr);

// 限制类名 该类或该类的后辈类的实例化对象
function love(Demo $a)
{
	var_dump($a);
}

//实例化
class Demo{}
class AAA extends Demo{}
$a = new Demo();
$a = new AAA();
love($a);

//不可以限制其它类型
function like(int $str)
{
	var_dump($str);
}
like();
 ?>