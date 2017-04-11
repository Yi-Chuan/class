<?php 

	//引入类文件
	include './config.php';
	include './DB.class.php';
	$user = new DB('user');



	//判断操作类型
	$res = $_GET['a'];
	switch ($res) {
		case 'add':
			//添加
				$id = $user->insert($_POST);
				if($id){
					header('location:./index.php');
				}else{
					echo '<script type="text/javascript">alert("添加失败");</script>';
					header('location:./add.php');
				}
			break;
		case 'edit':
			//修改
				$num = $user->update($_POST);
				if($num != 0){
					header('location:./index.php');
				}else{
					echo '<script type="text/javascript">alert("修改失败");</script>';
					header('location:./index.php');
				}
			break;
		case 'del':
			//删除
			$id = $_GET['id'];
			$num = $user->delete($id);
			if($num != 0){
				header('location:./index.php');
			}else{
				echo '<script type="text/javascript">alert("删除失败");</script>';
				header('location:./index.php');
			}
			break;

		
		default:
			# code...
			break;
	}





 ?>