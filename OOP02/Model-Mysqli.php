<?php 

	/**
	 * 数据库操作类
	 * 未来不迎  当下不杂 过往不恋
	 * clover  ==>  clever
	 */
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','lamp');
	define('CHARSET','utf8');

	class Model
	{
		//成员属性
		protected $tableName;
		protected $link;//连接标识
		protected $pk;//主键字段名
		protected $fields;//字段信息数组
		protected $field;//当前查询sql语句中的字段信息
		protected $where;//条件子句
		protected $order;//排序子句
		protected $limit;//数量限制

		//构造方法
		public function __construct($tableName)
		{
			$this->tableName = $tableName;
			//连接初始化操作
			//1.连击数据库
			$this->link = mysqli_connect(HOST, USER, PASS);
			//2.选择数据库
			mysqli_select_db($this->link, DB);
			//3.设置字符集
			mysqli_set_charset($this->link, CHARSET);
			//获取当前表的字段信息
			$this->getFields();
		}

		//成员方法
		/**
		 * 添加操作
		 *	参数   ['username'=>'xiaohigh','password'=>'iloveyou']	
		 *		 
		 *							||
		 *							||
		 *							||
		 *							\/
		 *	     ['username','password'] xiaohigh,iloveyou  xiaohigh","iloveyou
		 *      insert into user (username,password)values('xiaohigh','iloveyou');
		 */
		public function add($arr)
		{
			//检测键名是否合法
			// ['username'=>'xiaohigh','password'=>'iloveyou', 'abcd'=>'eee']
			foreach($arr as $k=>$v){
				//检测是否合法
				if(!in_array($k, $this->fields)){
					unset($arr[$k]);
				}
			}

			//获取字段的sql语句
			$keys = array_keys($arr);
			$keys_sql = implode(',', $keys);
			//获取键值的信息
			$value = array_values($arr);
			$value_sql = '"'.implode('","', $value).'"';
			//准备sql语句
			$sql = "insert into ".$this->tableName." (".$keys_sql.")values(".$value_sql.")";
			//发送
			$result = mysqli_query($this->link, $sql);
			//判断结果
			if($result){
				return mysqli_insert_id($this->link);
			}else{
				return false;
			}
		}

		/**
		 * 删除操作
		 */
		public function delete($id)
		{
			//拼接sql语句
			$sql = "delete from ".$this->tableName." where ".$this->pk." = ".$id;
			//发送
			$result = mysqli_query($this->link, $sql);
			if($result){
				return mysqli_affected_rows($this->link);
			}else{
				return false;
			}
		}

		/**
		 * 修改操作
		 *     ['username'=>'admin','password'=>'admin','id'=>'25']
		 *
		 *		update user set username='admin',password='admin' where id = 25
		 */
		public function update($arr)
		{
			//拼接sql语句
			$sql = '';
			$where = '';
			foreach($arr as $k=>$v){
				if($k == $this->pk){
					$where = ' where '.$this->pk.' = '.$v;
				}else{
					$sql .= $k."='".$v."',";
				}
			}
			$set_sql = rtrim($sql, ',');
			//拼接sql语句
			$sql = "update ".$this->tableName." set ".$set_sql.$where;
			//发送sql指令
			$result = mysqli_query($this->link, $sql);
			if($result){
				return mysqli_affected_rows($this->link);
			}else{
				return false;
			}
		}

		/**
		 * 查询单条
		 */
		public function find($id)
		{
			//拼接sql
			$sql = 'select * from '.$this->tableName.' where '.$this->pk.' = '.$id;
			//发送sql指令
			$result = mysqli_query($this->link, $sql);
			//获取结果
			if($result){
				return mysqli_fetch_assoc($result);
			}else{
				return false;
			}
		}

		/**
		 * 获取表中所有的字段信息
		 * desc user
		 */
		public function getFields()
		{
			//拼接sql语句
			$sql = 'desc '.$this->tableName;
			//发送sql指令
			$result = mysqli_query($this->link, $sql);
			//获取结果
			if($result){
				//声明一个空数组
				$arr = [];
				$pk = '';
				echo "<pre>";
				while($row = mysqli_fetch_assoc($result)){
					//判断是否为主键
					if($row['Key'] == 'PRI'){
						$pk = $row['Field'];
					}else{
						$arr[] = $row['Field'];
					}
				}
				//将字段信息存入到成员属性中
				$this->fields = $arr;
				$this->pk = $pk;
			}else{

			}
		}

		/**
		 * 统计表中所有的数据的总数
		 */
		public function count()
		{
			//sql
			$sql = "select count(*) as total from ".$this->tableName;
			//
			$result = mysqli_query($this->link, $sql);
			//
			if($result){
				$res = mysqli_fetch_assoc($result);
				return $res['total'];
			}else{
				return false;
			}
		}

		/**
		 * 查询多条
		 */
		public function select()
		{
			// select id,title,price from goods where title like '%连衣裙%' order By id desc limit 5
			$field_str = '';
			if(empty($this->field)) {
				$field_str = '*';
			}else{
				$field_str = $this->field;
			}

			$where_str = '';
			if(!empty($this->where)){
				$where_str = 'where '.$this->where;
			}

			$order_str = '';
			if(!empty($this->order)){
				$order_str = 'order by '.$this->order;
			}

			$limit_str = '';
			if(!empty($this->limit)){
				$limit_str = 'limit '. $this->limit;
			}
			
			//拼接完整sql指令
			$sql = "select ".$field_str." from ".$this->tableName." ".$where_str." ".$order_str." ".$limit_str;

			//清空属性
			$this->where = '';
			$this->order = '';
			$this->limit = '';
			$this->field = '';

			$result = mysqli_query($this->link, $sql);
			//
			if($result){
				$res = [];
				//遍历获取结果集 并压入到数组
				while($row = mysqli_fetch_assoc($result)){
					$res[] = $row;
				}
				//返回结果集
				return $res;
			}
			//返回false
			return false;
		}

		/**
		 * 声明字段方法
		 */
		public function field($str)
		{
			$this->field = $str;
			return $this;
		}

		public function where($str)
		{	
			$this->where = $str;
			return $this;
		}

		/**
		 * 排序
		 */
		public function order($str)
		{
			$this->order = $str;
			return $this;
		}

		/**
		 * 数量
		 */
		public function limit($str)
		{
			$this->limit = $str;
			return $this;
		}

	}

	// $user = new Model('user');

	//添加
	// $res = $user->add(['username'=>'xiaohigh','password'=>'iloveyou', 'abcd'=>'eee']);

	//删除
	// $res = $user->delete(30);

	//更新操作
	// $res = $user->update(['username'=>'admin','password'=>'admin','id'=>25]);

	//查询操作
	// $info = $user->find(21);
	// echo '<pre>';
	// var_dump($info);


	//多条查询
	// $user->field('username,password');
	// $user->where('id > 5');

	// $res = $user->where('id > 5')->field('id,username,password')->order('id desc')->limit('5,10')->select();
	// var_dump($res);
	// echo "<hr>";
	// $res2 = $user->select();
	// var_dump($res2);

	//统计
	// $count = $user->count();
	// echo $count;

	// echo '<pre>';
	// var_dump($user);

	// $user->getFields();

	// var_dump($res);
