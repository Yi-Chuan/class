<?php 
	
	//数据库的相关配置
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','LAMP145');
	define('CHARSET','utf8');
	
	
	
	// 定义DB类
	class DB
	{
		// 成员属性
		public $tablename;//表名
		public $link;//连接标识
		public $pk;//主键
		public $fields;//普通字段
		public $where;//where条件
		public $limit;//limit条件
		public $order;
		public $field;//当前查寻sql语句中的字段

// 构造方法
public function __construct($table){
	//初始化
	$this->tablename = $table;
	//链接数据库
	$this->link = mysqli_connect(HOST,USER,PASS) or die('数据库连接失败');
	// 选择库
	mysqli_select_db($this->link,DB) or die('选择库失败');
	// 设置字符集
	mysqli_set_charset($this->link,CHARSET);
	//获取所有字段
	$this->getFields();
}

		//添加操作 insert
		/*
			参数:关联数组
				['username'=>'zhangsna','password'=>'111111']

				username,password    zhangsan,111111
			返回值:
				成功 返回刚插入的数据id
				失败 返回false
		*/
public function insert($arr)
{
	//检测建明(字段)是否合法
	foreach ($arr as $k => $v) {
		//检测
		if(!in_array($k,$this->fields)){
			//不存在
			// unset($arr[$k]);
			die('您给的数据含有非法字段,请配合检测'.$k);
		}
	}
	//获取字段
	$keys = array_keys($arr);
	$keys_sql = implode(',',$keys);
	//获取键值
	$value = array_values($arr);
	$value_sql = '"'.implode('","',$value).'"';

	//准备sql
	$sql = 'insert into '.$this->tablename.'('.$keys_sql.') values('.$value_sql.')';
	//发送sql
	$result = mysqli_query($this->link,$sql);
	//判断结果
	if($result){
		//返回刚插入的数据id
		return mysqli_insert_id($this->link);
	}else{
		return false;
	}
}

//修改操作	update
/*
	参数 关联数组
	['username'=>'zhangsna','password'=>'111111','id'=>'20']

	update user set username='admin',password='1111' where id='1';
	返回值
		成功了 受影响行数
		失败	false
*/
public function update($arr)
{
	//拼接sql
	$sql = '';
	$where = '';
	//遍历
	foreach ($arr as $k => $v) {
		//检测是否为主键
		if($k == $this->pk){
			$where = ' where '.$this->pk.'='.$v;
		}else{
			$sql .= $k."='".$v."',";
		}
	}
	//去掉多余逗号
	$set_sql = rtrim($sql,',');

	//拼接sql
	$sql = "update ".$this->tablename." set ".$set_sql.$where;
	// echo $sql;
	//发送
	$result = mysqli_query($this->link,$sql);
	//判断
	if($result){
		return mysqli_affected_rows($this->link);
	}else{
		return false;
	}
}

		//删除操作
		public function delete($id)
		{
			//sql
			$sql = 'delete from '.$this->tablename.' where '.$this->pk.' = '.$id;
			//发送
			$res = mysqli_query($this->link,$sql);
			//判断
			if($res){
				return mysqli_affected_rows($this->link);
			}else{
				return false;
			}
		}


		// 单条查询
		public function find($id)
		{
			//准备sql语句
			$sql = 'select * from '.$this->tablename.' where id = '.$id;
			//发送
			$res = mysqli_query($this->link,$sql);
			//获取结果
			if($res){
				return mysqli_fetch_assoc($res);
			}else{
				return false;
			}
		}

		

		// 多条查询 没有参数
		public function select()
		{
			//检测where条件 
			$w = '';
			if(!empty($this->where)){
				$w = ' where '.$this->where;
			}

			//检测limit
			$l = '';
			if(!empty($this->limit)){
				$l = ' limit '.$this->limit;
			}

			//检测 order
			$o = '';
			if(!empty($this->order)){
				$o = ' order by '.$this->order;
			}

			//检测字段
			$f = '*';
			if(!empty($this->field)){
				$f = $this->field;
			}

			//清空指令
			$this->where = '';
			$this->limit = '';
			$this->order = '';
			$this->field = '';

			//准备sql
			$sql = 'select '.$f.' from '.$this->tablename.$w.$o.$l;
			// echo $sql;
			//发送sql
			$result = mysqli_query($this->link,$sql);
			//检测结果
			if($result){
				//定义空数组
				$arr = [];
				//遍历结果集,并压入数组
				while($row = mysqli_fetch_assoc($result)){
					$arr[] = $row;
				}
				//返回数据
				return $arr;
			}else{
				return false;
			}
		}

		//where条件
		public function where($w)
		{
			//存到成员属性中
			$this->where = $w;
			//返回当前对象
			return $this;
		}

		//order 条件
		public function order($o)
		{
			//存到成员属性中
			$this->order = $o;
			//返回当前对象
			return $this;
		}


		//limit条件
		public function limit($l)
		{
			//存到成员属性中
			$this->limit = $l;
			//返回当前对象
			return $this;
		}

		//field条件
		public function field($f)
		{
			//存到成员属性中
			$this->field = $f;
			//返回当前对象
			return $this;
		}

		//统计表中所有的数据
		public function count()
		{
			//检测where条件 
			$w = '';
			if(!empty($this->where)){
				$w = ' where '.$this->where;
			}

			$sql = 'select count(*) as total from '.$this->tablename.$w;

			$res = mysqli_query($this->link,$sql);
			if($res){
				$result = mysqli_fetch_assoc($res);
				return $result['total'];
			}else{
				return false;
			}
		}

		//获取表中的所有字段信息 desc user
		public function getFields()
		{
//拼接sql
$sql = 'desc '.$this->tablename;
//发送
$result = mysqli_query($this->link,$sql);
//声明变量和数组
$pk = '';//主键
$arr = [];//普通字段
// 获取结果
if($result){
while($row = mysqli_fetch_assoc($result))
{
	// 判断是否为主键
	if($row['Key'] == 'PRI'){
		$pk = $row['Field'];
	}else{
		$arr[] = $row['Field'];
	}
}
//将字段信息存入到成员属性中
$this->pk = $pk;
$this->fields = $arr;
}else{
	return false;
}
		}

	}

	
	
 ?>