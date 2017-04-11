<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<!-- Bootstrap -->
	<link href="./dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./dist/js/jquery-1.11.3.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./dist/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		//pdo
		$pdo = new PDO('mysql:host=localhost;dbname=lamp148;charset=utf8;port=3306','root','');
		$stmt = $pdo->query('select * from user limit 20');
		//提取数据
		$users = $stmt->fetchAll(
		PDO::FETCH_ASSOC);

	 ?>
	<div class="container">
	<table class="table table-hover">
	   <thead>
	      <tr>
	         <th>id</th>
	         <th>用户名</th>
	         <th>密码</th>
	         <th>邮箱</th>
	         <th>操作</th>
	      </tr>
	   </thead>
	   <tbody>
	   <?php 
	   	foreach ($users as $k => $v) {
	    ?>
	      <tr>
	         <td class="sid"><?php echo $v['id']; ?></td>
	         <td class="update"><?php echo $v['username']; ?></td>
	         <td><?php echo $v['password']; ?></td>
	         <td><?php echo $v['email']; ?></td>
	     
	         <td><button>删除</button></td>
	      </tr>
	      <?php 
	      }
	       ?>
	   </tbody>
	</table>
	</div>
	<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
	//绑定单击事件
	$('button').click(function(){
		//获取id
		var id = $(this).parents('tr').find('.sid').html();
		var btn = $(this);

//发送ajax XMLHttpRequest
$.get('8.php',{id:id},function(data){
	// console.log(data);
	//根据返回的数据做判断
	if(data == 1){
		// alert('删除成功');
		//删除元素 this $this $(this) 代表当前这个对象
		// $(this).parents('tr').remove();
		// console.log($(this));//这时的$(this)代表的是ajax对象
		btn.parents('tr').remove();
	}else{
		alert('删除失败');
	}
})
	})


//绑定双击事件 进行修改
$('.update').dblclick(function(){
	if($(this).attr('isDbl') == 1){return}
	//添加标识
	$(this).attr('isDbl',1);
	//获取原来的用户名
	var yname = $(this).html();
	var id = $(this).prev().html();
	var td = $(this);
	//创建input
	var inp = $('<input type="text" value="'+yname+'" />');
	$(this).empty();
	//插入
	$(this).append(inp);
	inp.select();
	//绑定丧失焦点事件
	inp.blur(function(){
		var name = $(this).val();
		//发送ajax
		$.post('8.php',{id:id,name:name},function(data){
			//判断返回
			if(data == 1){
				//修改成功
				// alert('成功');
				td.empty();
				td.html(name);
				td.removeAttr('isDbl');
			}else{
				//修改失败
				td.empty();
				td.html(yname);
				td.removeAttr('isDbl');

			}
		});
	})
})
	</script>
</body>
</html>