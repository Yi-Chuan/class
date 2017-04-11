<?php 
//composer 安装 包 工具  使用

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

//自动引入所需要的文件
include './vendor/autoload.php';

// create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('./log/'.date('Y-m-d',time()).'.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar'); 

//实例化对象
$curl = new Curl\Curl();
// var_dump($curl);
//请求方式 请求的url data=>array()
$curl->get('http://www.smartisan.com/');
echo $curl->response;



 ?>