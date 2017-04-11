<?php 
// echo '222';
//引入smarty
include './libs/Smarty.class.php';

//实例化 创建 smarty对象
$s = new Smarty();

//初始化
//设置当前模板文件存放目录
$s->template_dir = './view';

class Phone
{
	public $name = '锤子';
	public $price = '999';
}
$chuizi = new Phone();

//分配普通变量
$s->assign('title','狗蛋网');
$s->assign('bool',true);
$s->assign('age',20);
$s->assign('pai',3.1415926);
$s->assign('arr',['red','blue','pink']);
$s->assign('phone',$chuizi);

//超全局变量
$_GET['name'] = 'zhansgan';
$_POST['sex'] = '妖';
//设置cookie
setcookie('like','ilikeyou',time()+3600,'/');
//设置session
session_start();
$_SESSION['love'] = 'iloveyou';


//解析模板
$s->display('2.html');



 ?>