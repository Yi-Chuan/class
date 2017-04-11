<?php 
	/**
	 * 关于用户的所有操作都在这里
	 */
	class UserController extends CommonController
	{
		/**
		 * 用户列表
		 */
		public function index()
		{
			//创建对象 model
			$user = new DB('user');

			//查询数据库
			$users = $user->select();

			//分配变量
			$this->assign('title','用户列表');
			$this->assign('users',$users);
			//解析模板
			$this->display('user/index.html');
		}

		/**
		 * 显示用户的添加页面
		 */
		public function add()
		{
			
			//分配变量
			$this->assign('title','用户的添加表单');

			//解析模板
			$this->display('user/add.html');
		}

		/**
		 * 处理用户的添加操作
		 */
		public function insert()
		{
		
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
			//创建对象 model
			$user = new DB('user');
			//根据id查询用户数据
			$res = $user->find($_GET['id']);

			//分配变量
			$this->assign('title','用户的修改表单');
			$this->assign('res',$res);

			//解析模板
			$this->display('user/edit.html');

		}

		/**
		 * 处理用户的数据修改
		 */
		public function update()
		{
		
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