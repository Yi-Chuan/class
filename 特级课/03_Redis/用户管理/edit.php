<?php
include "init.php";
$id=$_GET['id'];
$username=$_GET['username'];
$password=$_GET['password'];
if($username && $password){
    $redis->hmset("key:$id",array("username"=>$username,"password"=>$password));
    echo "<script>location='index.php'</script>";
}else{
    echo "<script>location='mod.php'</script>";
}
