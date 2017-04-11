<?php
include "init.php";
$id=$_GET['id'];
$data=$redis->hgetall("key:$id");
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>index</title>
    <style type="text/css">
    </style>
</head>
<body>
    <div id=div1>
        <h1 id="heading">修改用户</h1>        
        <form action="edit.php" method="get">
        <p><input name="id" type="hidden" value="<?php echo $id ?>"></p>
        <p><input name="username" type="text" value="<?php echo $data['username']?>"></p>
        <p><input name="password" type="text" value="<?php echo $data['password']?>"></p>
            <p><input name="sub" type="submit" value="submit"></p>
        </form>
    </div>
</body>
<script>
    
</script>
</html>

