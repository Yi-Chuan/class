<?php 
	/**
	 * 关于商品的所有操作都在这里
	 */
	class GoodsController extends CommonController
	{
		/**
		 * 商品列表
		 */
		public function index()
		{
			echo '显示商品列表';
		}

		/**
		 * 显示商品的添加页面
		 */
		public function add()
		{
			echo '商品添加页面';
		}

		/**
		 * 处理商品的添加操作
		 */
		public function insert()
		{
			echo '商品的数据添加操作';
		}

		/**
		 * 处理商品的删除操作
		 */
		public function delete()
		{
			echo '商品的删除操作';
		}

		/**
		 * 显示商品修改表单
		 */
		public function edit()
		{
			echo '显示商品修改表单';
		}

		/**
		 * 处理商品的数据修改
		 */
		public function update()
		{
			echo '处理商品的数据修改';
		}

	}





 ?>