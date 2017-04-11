<?php 
//3遍
/*
	类名 Url
	http://www.taobao.com/index.php
	https://www.baidu.com
	ftp://192.168.145.250/class/index.php
	file://192.168.145.245/index.php
	svn://192.168.145.222/index.php

	创建对象
	接收参数 当前要操作的url
	事例: $url = new Url('http://www.taobao.com/index.php');
	功能:
		1,获取协议信息
			方法名: getPro()
		2,获取域名或IP地址
			方法名: getIp()
		3,获取当前的脚本名称
			方法名: getFile();
		4,获取当前脚本的后缀名
			方法名: getSuffix();
*/
// Url.class.php  Model.class.php  Page.class.php 

class Url
{
	//成员属性
	public $url;

	//构造方法
	public function __construct($u)
	{	
		//初始化
		$this->url = $u;
	}

//获取协议信息 getPro 返回协议信息
public function getPro()
{
//字符串
// $h = strstr($this->url,':',true);
//截取
$p = strpos($this->url,':');
$h = substr($this->url,0,$p);
//拆分字符串
$arr = explode(':',$this->url);
$h = $arr[0];
//正则表达式
preg_match("/\w+/",$this->url,$temp);
$h = $temp[0];
$h = parse_url($this->url)['scheme'];
// var_dump($h);
//将数据返回
return $h;
}

	//获取域名或ip地址
	public function getIp()
	{
//正则
preg_match("/\/\/(.+)\//",$this->url,$temp);
// var_dump($temp);
// return $temp[1];

return parse_url($this->url)['host'];
	}

	//获取脚本名称 getFile
	public function getFile()
	{
// 函数
$file = basename($this->url);
// var_dump($file);
$file = ltrim(strrchr($this->url,'/'),'/');
// var_dump($res);
return $file;
	}
	//获取脚本后缀名 getSuffix  php html css js
	public function getSuffix()
	{
$res = pathinfo($this->url,
	PATHINFO_EXTENSION);
// var_dump($res);
return $res;
	}

}

//实例化对象
$u = 'http://www.taobao.com/index.php';
$u = 'svn://192.168.145.222/index.php';
$url = new Url($u);

// var_dump($url);

//获取协议信息
// $res = $url->getPro();
// echo $res;

//获取域名或者ip
$res = $url->getIp();
var_dump($res);
//获取脚本名称
// $url->getFile();

//获取后缀名
// $url->getSuffix();




 ?>