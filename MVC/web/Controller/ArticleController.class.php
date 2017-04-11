<?php 
	/**
	 * 关于文章的所有操作都在这里
	 */
	class ArticleController extends CommonController
	{
		/**
		 * 文章列表
		 */
		public function index()
		{
			echo '显示文章列表';
		}

		/**
		 * 显示文章的添加页面
		 */
		public function add()
		{
			echo '文章添加页面';
		}

		/**
		 * 处理文章的添加操作
		 */
		public function insert()
		{
			echo '文章的数据添加操作';
		}

		/**
		 * 处理文章的删除操作
		 */
		public function delete()
		{
			echo '文章的删除操作';
		}

		/**
		 * 显示文章修改表单
		 */
		public function edit()
		{
			echo '显示文章修改表单';
		}

		/**
		 * 处理文章的数据修改
		 */
		public function update()
		{
			echo '处理文章的数据修改';
		}

	}





 ?>