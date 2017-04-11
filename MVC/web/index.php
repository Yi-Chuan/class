<?php 

//单入口文件	
// index.php?c=user&a=index

//获取用户的需求(访问路径)
//获取要访问的控制器(模块)
$c = !empty($_GET['c']) ? $_GET['c'] : 'index';
//获取访问控制器的具体方法 
$a = !empty($_GET['a']) ? $_GET['a'] : 'index';


//引入控制器文件
include './Controller/'.$c.'Controller.class.php';

//自动加载
function __autoload($className){
	if(file_exists('./Model/'.$className.'.class.php')){
		include './Model/'.$className.'.class.php';
	}else if(file_exists('./library/Smarty/'.$className.'.class.php')){
		include './library/Smarty/'.$className.'.class.php';
	}else{
		include './Controller/CommonController.class.php';
	}
}

//以下锦囊,在危机时刻打开,可祝你一臂之力
// spl_autoload_register('__autoload');


//引入配置文件
include './Config/config.php';

//拼接类名
$controller = $c.'Controller';

//实例化控制器对象
$c = new $controller();

//访问控制器下的方法
$c->$a();




 ?>