<?php 


	$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');

	$stmt = $pdo->query('select * from user');

	$res = $stmt->fetchAll();

	// var_dump($res);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>id</td>
 			<td>用户名</td>
 			<td>邮箱</td>
 			<td>操作</td>
 		</tr>
 		<?php 
 			foreach($res as $k=>$v){
 		?>
 			<tr>
 				<td><?php echo $v['id']; ?></td>
 				<td><?php echo $v['username']; ?></td>
 				<td><?php echo $v['email']; ?></td>
 				<td>删除|修改</td>
 			</tr>
 		<?php		
 			}
 		 ?>
 	</table>
 </body>
 </html>