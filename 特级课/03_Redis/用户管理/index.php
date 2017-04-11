<?php
include "init.php";
echo "<h1>用户列表</h1>";
$data=$redis->lrange("ids","0","-1");
echo "<table width='700px' border='1px'>";
echo "<th>用户编号</th><th>用户姓名</th><th>用户密码</th><th>删除</th><th>修改</th></tr>";
foreach($data as $val){
    $row=$redis->hgetall("key:$val");
    echo "<tr>";
        echo "<td>{$val}</td>";
        echo "<td>{$row['username']}</td>";
        echo "<td>{$row['password']}</td>";
        echo "<td><a href='del.php?id={$val}'>删除</a></td>";
        echo "<td><a href='mod.php?id={$val}'>修改</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
<br>
<a href="add.php">添加用户</a>
