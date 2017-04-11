<?php 
	/**
	 * 关于用户的所有操作都在这里
	 */
	class UserController
	{
		/**
		 * 用户列表
		 */
		public function index()
		{
			//引入类文件
			include './Config/config.php';
			include './Model/DB.class.php';
			
			//引入smarty类文件
			include './library/Smarty/Smarty.class.php';
			//创建对象
			$s = new Smarty();
			//初始化
			$s->template_dir = './View';
			$s->compile_dir = './View_C';

			//创建对象 model
			$user = new DB('user');
			//查询数据库
			$users = $user->select();

			//分配变量
			$s->assign('title','用户列表');
			$s->assign('users',$users);
			//解析模板
			$s->display('user/index.html');
		}

		/**
		 * 显示用户的添加页面
		 */
		public function add()
		{
			// echo '用户添加页面';
			//引入smarty类文件
			include './library/Smarty/Smarty.class.php';
			//创建对象
			$s = new Smarty();
			//初始化
			$s->template_dir = './View';
			$s->compile_dir = './View_C';

			//分配变量
			$s->assign('title','用户的添加表单');

			//解析模板
			$s->display('user/add.html');
		}

		/**
		 * 处理用户的添加操作
		 */
		public function insert()
		{
			// echo '用户的数据添加操作';
			
			//引入类文件
			// include './Config/config.php';
			// include './Model/DB.class.php';
			//创建对象 model
			$user = new DB('user');
			//执行添加操作
			$res = $user->insert($_POST);
			// echo $res;
			//判断
			if($res){
				echo '<script type="text/javascript">
							location.href = "http://localhost/Class/lamp148/MVC/web/index.php?c=user&a=index";
					</script>';
			}else{
				echo '<script type="text/javascript">
					alert("添加失败");
				</script>';
			}
		}

		/**
		 * 处理用户的删除操作
		 */
		public function delete()
		{
			//引入类文件
			include './Config/config.php';
			include './Model/DB.class.php';
			//创建对象 model
			$user = new DB('user');
			//执行删除
			$res = $user->delete($_GET['id']);
			//判断
			if($res){
				echo '<script type="text/javascript">
							location.href = "http://localhost/Class/lamp148/MVC/web/index.php?c=user&a=index";
					</script>';
			}else{
				echo '<script type="text/javascript">
					alert("删除失败");
				</script>';
			}
		}

		/**
		 * 显示用户修改表单
		 */
		public function edit()
		{
			// echo '显示用户修改表单';/
			//引入类文件
			include './Config/config.php';
			include './Model/DB.class.php';
			//创建对象 model
			$user = new DB('user');
			//根据id查询用户数据
			$res = $user->find($_GET['id']);

			//引入smarty类文件
			include './library/Smarty/Smarty.class.php';
			//创建对象
			$s = new Smarty();
			//初始化
			$s->template_dir = './View';
			$s->compile_dir = './View_C';

			//分配变量
			$s->assign('title','用户的修改表单');
			$s->assign('res',$res);

			//解析模板
			$s->display('user/edit.html');

		}

		/**
		 * 处理用户的数据修改
		 */
		public function update()
		{
			//引入类文件
			include './Config/config.php';
			include './Model/DB.class.php';
			//创建对象 model
			$user = new DB('user');
			//执行修改
			$res = $user->update($_POST);
			//判断
			if($res){
				echo '<script type="text/javascript">
							location.href = "http://localhost/Class/lamp148/MVC/web/index.php?c=user&a=index";
					</script>';
			}else{
				echo '<script type="text/javascript">
					alert("修改失败");
				</script>';
			}
		}

	}





 ?>