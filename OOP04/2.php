<?php 
/*
instanceof 操作符
	用于检测当前对象是否属于某一个类的实例化
	检测当前对象是否属于该类或该类的后辈类的实例化
*/

	class Person{}

	class Student extends Person{}

	//实例化
	$p = new Person();
	$s = new Student();

// 检测
$res1 = $p instanceof Person;//true
$res2 = $p instanceof Student;//false
$res3 = $s instanceof Student;// true
$res4 = $s instanceof Person;//true

var_dump($res1);
var_dump($res2);
var_dump($res3);
var_dump($res4);










 ?>