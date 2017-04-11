<?php 
	//类名 Url  Url.class.php  Url-class.php UrlClass.php  ClassUrl.php
	
	/*
		https://www.baidu.com
		http://www.taobao.com
		http://jd.com/public/img/1.jpg
		ftp://192.168.157.111/index.php
		file://192.168.157.1/public/index.html
		svn: .........

		封装类文件  操作url

		功能: 
			1.获取协议信息
				方法名:getPro();
			2.获取域名或ip地址
				方法名:getIp();
			3,获取当前脚本的名称
				方法名:getFile();
			4,获取当前脚本的后缀名
				方法名:getSuffix();
		
		$url = new Url($url);
		echo $url->getPro();

		Url.class.php  Model.class.php  Page.class.php
	*/
	

	class Url
	{
		//成员属性
		public $url; 
		public $pro;

		//构造方法
		public function __construct($u)
		{
			//初始化
			$this->url = $u;
			//
			$this->Pro = $this->getPro();
		}

		//获取协议信息 getPro  返回协议信息
		public function getPro()
		{
			//字符串函数
				// $p = strpos($this->url,':');
				// $h = substr($this->url,0,$p);
			//字符串查找 并返回后面的字符串,如果加上true 就是返回前面的
				// $h = strstr($this->url,':',true);
			//字符串拆分
				// $arr = explode(':',$this->url);
				// $h = $arr[0];
			//正则表达式
				// preg_match("/\w+/",$this->url,$temp);
				// $h = $temp[0];
			$h = parse_url($this->url)['scheme'];
			
			return $h;
		}

		//获取域名或ip地址
		public function getIp()
		{
			//正则
			preg_match("/\/\/(.+?)\//",$this->url,$temp);
			// var_dump($temp);

			$h = parse_url($this->url)['host'];

			return $temp[1];
		}

		//获取脚本名称 getFile
		public function getFile()
		{
			$file = basename($this->url);
			
			$file = ltrim(strrchr($this->url,'/'),'/');
			// var_dump($file);
		}

		//获取脚本的后缀名 getSuffix()
		public function getSuffix()
		{
			$res = pathinfo($this->url,PATHINFO_EXTENSION);
			// var_dump(PATHINFO_EXTENSION);
			return $res;
		}

	}








 ?>