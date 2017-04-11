<?php
include "init.php";
$username=$_GET['username'];
$password=$_GET['password'];
if($username && $password){
    $id=$redis->incr("userid");
    $redis->rpush("ids",$id);
    $redis->hmset("key:$id",array("username"=>$username,"password"=>$password));
    echo "<script>location='index.php'</script>";
}else{
    echo "<script>location='add.php'</script>";
}
