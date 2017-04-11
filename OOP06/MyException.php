<?php 

//设置时区
date_default_timezone_set('PRC');

//自定义异常处理类
class MyException extends Exception
{
	//友好的显示异常信息
	public function show()
	{
		//获取异常信息
		//文件路径
		$file = $this->getFile();
		//行号
		$line = $this->getLine();
		//信息
		$message = $this->getMessage();
		//编号
		$code = $this->getCode();
		//引入模板文件
		include './template.php';
	}

	//将异常写入日志中
	public function log()
	{
		//文件路径
		$file = $this->getFile();
		//行号
		$line = $this->getLine();
		//信息
		$message = $this->getMessage();
		//编号
		$code = $this->getCode();
		$time = date('Y-m-d H:i:s',time());
		//[2016-7-6 10:15:12] 信息:aaaa,路径:1.php,行号:12,编号:10080
		$str = '['.$time.'] 信息:'.$message.',路径:'.$file.',行号:'.$line.',编号:'.$code."\r\n";
		//路径
		$path = './log/'.date('Y-m-d',time()).'.log';
		//打开文件
		$f = fopen($path,'a+');
		//写入内容
		fwrite($f,$str);
		//关闭文件
		fclose($f);
	}
}

// try{
// 	throw new MyException('今天周三啦,严打三天',10010);
// }catch(MyException $e){
// 	$e->show();
// 	$e->log();
// }

//扩展了解
//指定一个函数来进行异常处理
set_exception_handler('Mysole');
function Mysole($a){
	$a->show();
	$a->log();
}

//直接抛出异常
throw new MyException('zhangsan',10086);




 ?>