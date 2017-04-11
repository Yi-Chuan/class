<?php 
	// //数据库的配置项
	// define('HOST','localhost');
	// define('USER','root');
	// define('PASS','');
	// define('CHARSET','utf8');
	// define('DBNAME','lamp148');
	//针对数据库做 增删改查
	class DB
	{
		//成员属性
		private $tableName;//表名
		private $link;//链接标识
		private $pk;//主键信息
		private $fields = array();//普通字段信息
		private $where;//where条件
		private $limit;//limit条件
		private $field;//字段条件
		private $order;//排序条件

		//构造方法
		public function __construct($tableName)
		{
			//初始化第一步
			$this->tableName = $tableName;
			//链接数据库
			$this->link = mysqli_connect(HOST,USER,PASS) or die('数据库链接失败');
			//设置字符集
			mysqli_set_charset($this->link,CHARSET) or die('字符集设置失败');
			//选择库
			mysqli_select_db($this->link,DBNAME) or die('选择库失败');
			//获取表中的字段信息
			$this->getFields();
		}
		//获取当前表中所有的字段
		private function getFields()
		{
			//sql
			$sql = 'desc '.$this->tableName;
			//发送
			$result = mysqli_query($this->link,$sql);
			//声明一个空数组
			$arr = [];
			$pk = '';
			//处理返回结果
			if($result){
				//循环提取
				while($row = mysqli_fetch_assoc($result)){
					//判断检测是否为主键
					if($row['Key'] == 'PRI'){
						$pk = $row['Field'];
					}else{
						$arr[] = $row['Field'];
					}
				}
			//把字段存入属性中,方便其它方法调用
				$this->pk = $pk;
				$this->fields = $arr;
			}else{
				return false;
			}
		}

		//添加操作
		/*
			[字段=>值,字段=>值]=>['username'=>'admin','password'=>'admin']
		*/
		public function insert(array $arr)
		{
			//检测是否存在非法字段
			foreach($arr as $k=>$v){
				//检测是否合法
				if(!in_array($k,$this->fields)){
					die('数组中存在非法字段,请配合检查.非法字段:'.$k);
				}
			}
			//获取字段
			$keys = array_keys($arr);
			$keysql = implode(',',$keys);
			//获取键值信息
			$value = array_values($arr);
			$valuesql = '"'.implode('","',$value).'"';
			//sql
			$sql = 'insert into '.$this->tableName.'('.$keysql.') values('.$valuesql.')';
			//echo $sql;die;
			//发送sql
			$result = mysqli_query($this->link,$sql);
			//处理结果
			if($result){
				return mysqli_insert_id($this->link);
			}else{
				return false;
			}
		}

		//修改
		public function update(array $arr)
		{
			//检测是否存在非法字段
			foreach($arr as $k=>$v){
				//检测是否合法
				if(!in_array($k,$this->fields)){
					if($k != $this->pk){
						die('数组中存在非法字段,请配合检查.非法字段:'.$k);
					}

				}	
			}
			//拼接sql
			$ksql = '';
			//拼接where
			$where = '';
			foreach ($arr as $k => $v) {
				if($k == $this->pk){
					$where = ' where '.$this->pk.'='.$v;
				}else{
					$ksql .=  $k.' = "'.$v.'",';
				}
			}

			if($where == ''){
				die('不允许没有where条件修改');
			}
			$set_sql = rtrim($ksql,',');
		
			//sql
			$sql = 'update '.$this->tableName.' set '.$set_sql.$where;
			//执行sql
			$result = mysqli_query($this->link,$sql);
			//处理返回结果
			if($result){
				return mysqli_affected_rows($this->link);
			}else{
				return false;
			}
		}

		// 删除
		public function delete($id)
		{
			//拼接sql
			$sql = 'delete from '.$this->tableName.' where '.$this->pk.' = '.$id;
			// echo $sql;die;
			//执行
			$result = mysqli_query($this->link,$sql);
			//处理返回结果
			if($result){
				return mysqli_affected_rows($this->link);
			}else{
				return false;
			}
		}

		//单条查询
		public function find($id)
		{
			//sql
			$sql = 'select * from '.$this->tableName.' where '.$this->pk.' = '.$id;
			//执行sql语句
			$result = mysqli_query($this->link,$sql);
			//处理返回结果
			if($result){
				return mysqli_fetch_assoc($result);
			}else{
				return false;
			}
		}

		//多条查询
		public function select()
		{
			//检测是否有where条件
			$w = '';
			if($this->where){
				$w = ' where '.$this->where;
			}
			//检测是否有字段条件
			$f = '*';
			if($this->field){
				$f = $this->field;
			}
			//检测limit条件
			$l = '';
			if($this->limit){
				$l = ' limit '.$this->limit;
			}
			//检测排序条件
			$d = '';
			if($this->order){
				$d = ' order by '.$this->order;
			}
			//清空所有指令
			$this->where = '';
			$this->limit = '';
			$this->order = '';
			$this->field = '';

			//sql
			$sql = 'select '.$f.' from '.$this->tableName.$w.$d.$l;
			// echo $sql;
			//执行
			$result = mysqli_query($this->link,$sql);
			//处理返回结果
			if($result){
				$res = [];
				//循环提取数据
				while($row = mysqli_fetch_assoc($result)){
					$res[] = $row;
				}
				return $res;
			}else{
				return false;
			}
		}

		//定义where条件方法
		public function where($str)
		{
			//把条件存到成员属性中
			$this->where = $str;
			//返回当前对象
			return $this;
		}

		//定义排序条件
		public function order($str)
		{
			$this->order = $str;
			return $this;
		}

		//定义limit 
		public function limit($str)
		{
			$this->limit = $str;
			return $this;
		}

		//定义字段方法
		public function field($str)
		{
			//把条件存到成员属性中
			$this->field = $str;
			//返回当前对象
			return $this;
		}

		//统计表中所有数据
		public function count()
		{
			//检测是否有where条件
			$w = '';
			if($this->where){
				$w = ' where '.$this->where;
			}
			//sql
			$sql = 'select count(*) as total from '.$this->tableName.$w;
			//执行
			$result = mysqli_query($this->link,$sql);
			//处理
			if($result){
				return mysqli_fetch_assoc($result)['total'];
			}else{
				return false;
			}
		}
		//析构方法
		public function __destruct()
		{
			//关闭数据库
			mysqli_close($this->link);
		}
	}



 ?>