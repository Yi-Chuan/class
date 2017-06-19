<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>XSS原理重现</title>
</head>
<body>
	<form action="" method="get"> 
		<input type="text" name="xss_input"> 
		<input type="submit"> 
	</form> 
	<hr> 
	<?php 
	$xss = $_GET['xss_input'];

	echo '你输入的字符为<br>'.
	htmlspecialchars($xss);
	?> 
</body>
</html>