<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息列表</title>
</head>
<body>
		<center>
			<h1>学生信息列表</h1>
			<hr>
			<table border=1 width=1170 cellspacing=0 cellpadding=5>
				<tr>
					<th>id</th>
					<th>姓名</th>
					<th>年龄</th>
					<th>性别</th>
					<th>班级</th>
					<th>描述</th>
					<th>添加时间</th>
				</tr>
				<?php
					$mem = new Memcache();
					$mem->addServer('127.0.0.1', 11211);
					
					//从memache中获取缓存数据
					$data = $mem->get('data');
					
					//判断有无缓存
					if (!$data) {
						require "Model.class.php";
						require "config.php";
						$model = new Model('student');
						$data = $model->select();
						//添加到memcache服务器中
						$mem->set('data', $data, MEMCACHE_COMPRESSED, 3600);
						echo "无缓存 : ".date('Y-m-d H:i:s')."<hr>";
					}
					
					//遍历数据
					foreach ($data as $v) {
				?>
					<tr>
						<td><?=$v['id']?></td>
						<td><?=$v['name']?></td>
						<td><?=$v['age']?></td>
						<td><?=$v['sex']?></td>
						<td><?=$v['grade']?></td>
						<td><?=$v['des']?></td>
						<td><?=$v['addtime']?></td>
					</tr>
				<?php
					}
				?>
				
			</table>
		</center>
</body>
</html>