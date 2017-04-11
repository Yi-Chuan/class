<?php
include "init.php";
$id=$_GET['id'];
if($redis->lrem("ids",$id,1)){
    if($redis->del("key:$id")){
        echo "<script>location='index.php'</script>";
    }
}
