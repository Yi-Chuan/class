<?php 

// phpinfo();

// var_dump($_POST);
//获取上传的临时路径 
$f = $_FILES['img']['tmp_name'];
// 拼接移动之后的文件路径
$name = "./uploads/".$_FILES['img']['name'];
// 移动上传文件
move_uploaded_file($f,$name);


// echo "<script>alert('上传成功');</script>";
// echo '<script type="text/javascript">
// // 上传成功修改父窗口的body背景
// var f = parent.document.body.style.background = "#FF3399";
// // 获取父级元素 input隐藏域
// var img = document.getElementById('img');
// </script>';



$img = "<img src=".$name." width='200px'>";
echo $img;

	$str = <<<ABC
<script type="text/javascript">
// 上传成功修改父窗口的body背景
var f = parent.document.body.style.background = "#FF3399";
// 获取父级元素 input隐藏域
var img = parent.document.getElementById('img');
img.value = '$name';
</script>
ABC;
echo $str;
 ?>