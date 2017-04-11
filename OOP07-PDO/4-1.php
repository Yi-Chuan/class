<?php 

	// var_dump($_POST);


	//接收参数
$user = $_POST['username'];
$pass = $_POST['password'];

$link = mysqli_connect('localhost','root','');

mysqli_select_db($link,'lamp145');

mysqli_set_charset($link,'utf8');

select * from user where username = 'admin'#' and password = ''登录成功
$sql = "select * from user where username = '".$user."' and password = '".$pass."'";
echo $sql;

$res = mysqli_query($link,$sql);

//处理返回结果
if($res){
	$result = mysqli_fetch_assoc($res);
	//判断用户是否存在
	if(!empty($result)){
		echo '登录成功';
	}else{
		echo '登录失败';
	}
}else{
	echo '查询出现错误';
}

 ?>