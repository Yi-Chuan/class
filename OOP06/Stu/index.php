<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学员信息表</title>
</head>
<body>
	<center>
		<h2>信息列表</h2>
		<a href="add.php">信息添加</a>
		<a href="index.php">信息浏览</a>
		<h3>搜索</h3>
		<form action="index.php" method="get">
			姓名: <input type="text" name="username">
			<input type="submit" value="查询">
		</form>
		<br>
		<table width="600" border='1'>
			<tr>
				<td>id</td>
				<td>姓名</td>
				<td>密码</td>
				<td>邮箱</td>
				<td>操作</td>
			</tr>
			<?php 
				include './config.php';
				include './DB.class.php';
				include './Page.class.php';

				//实例化表对象
				$user = new DB('user');

				//搜索条件
				if(!empty($_GET['username'])){
					$user->where('username like "'.$_GET['username'].'%"');
				}

				//实例化分页类
				$page = new Page($user->count(),5);

				//查询所有数据
				$res = $user->limit($page->getLimit())->select();
				//遍历
				foreach ($res as $k => $v) {
			 ?>
			<tr>
				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['username']; ?></td>
				<td><?php echo $v['password']; ?></td>
				<td><?php echo $v['email']; ?></td>
			
				<td>
					<a href="action.php?a=del&id=<?php echo $v['id']; ?>">删除</a>|
					<a href="edit.php?id=<?php echo $v['id']; ?>">修改</a>
				</td>
			</tr>
			<?php 
				}
			 ?>
		</table>
		<?php $page->show(); ?>
	</center>
</body>
</html>