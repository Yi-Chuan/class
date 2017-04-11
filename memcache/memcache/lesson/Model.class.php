<?php
/**
 * 数据操作类
 * @author   xiaoyanyan
 * @date      2015-06-17
*/
class Model
{
	private $link = null; 			//数据库连接资源
	private $tabName = null;	//数据表名
	private $pk = "id";				//主键名
	private $fieldList = array(); //表中字段列表
	private $field;						//要查询的字段
	private $where;					//查询条件
	private $order;					//排序条件
	private $limit;					//分页条件
	
	/**
	 * 构造方法 连接mysql服务器 连接数据库 设置字符集
	*/
	public function __construct($tabName)
	{
		//连接mysql
		$this->link = mysql_connect(HOST, USER, PASS) or die ('数据库连接失败！');
		//选择数据库
		mysql_select_db(DBNAME, $this->link);
		//设置字符集编码
		mysql_set_charset('utf8', $this->link);
		//给表名赋值
		$this->tabName = $tabName;
		//获取 表中字段 和 主键
		$this->getField();
	}
	
	/**
	  * 数据库查询的方法 从数据库中查询多条数据
	*/
	public function select()
	{
		$field = "*";		//要查询的字段
		//判断 有无指定 查询条件
		if (!empty($this->field)) {
			$field = $this->field;
			//清空 字段列表
			$this->field = null;
		}
		
		$where = "";		//查询条件
		//判断有无查询条件
		if (!empty($this->where)) {
			$where = "where ".$this->where;
			$this->where = null;
		}
		
		$order = "";		//排序条件
		//判断有无排序条件
		if (!empty($this->order)) {
			$order = "order by ".$this->order;
			$this->order = null;
		}
		
		$limit = "";			//分页条件
		//判断有无分页条件
		if (!empty($this->limit)) {
			$limit = "limit ".$this->limit;
			$this->limit = null;
		}
		
		//定义sql语句
		$sql = "select {$field} from {$this->tabName} {$where} {$order} {$limit}";
		
	
		//发送sql语句
		$result = mysql_query($sql, $this->link);
		//处理结果集
		if ($result) {
			if (mysql_num_rows($result) > 0) {
				$data = array();
				//循环
				while ($rows = mysql_fetch_assoc($result)) {
					$data[] = $rows;
				}
				return $data;
			}
			mysql_free_result($result);
		}
		return false;
	}
	
	
	/**
	  * 取单条数据的方法  
	  * @param int $pkValue  主键值 
	*/
	public function find($pkValue)
	{
		$field = "*";		//要查询的字段
		//判断 有无指定 查询条件
		if (!empty($this->field)) {
			$field = $this->field;
			//清空 字段列表
			$this->field = null;
		}
		//定义 sql
		$sql = "select {$field} from {$this->tabName} where {$this->pk}='{$pkValue}' limit 1";
		//执行sql 
		$result = mysql_query($sql, $this->link);
		//处理结果集
		if ($result) {
			if (mysql_num_rows($result) > 0) {
				return mysql_fetch_assoc($result);
			}
			mysql_free_result($result);
		}
		return false;
	}
	
	
	/**
	  * 执行 要查询的字段
	  * @param string $field  字段列表
	  * @return object $this
	*/
	public function field($field)
	{
		 $this->field = $field;
		 return $this;
	}
	
	/**
	  * 获取查询条件
	  * @param string $where
	  * @return object $this
	*/
	public function where($where)
	{
		$this->where = $where;
		return $this;
	}
	
	/**
	 * 获取 排序条件
	 * @param sting  $order
	 * @return object $this
	*/
	public function order($order)
	{
		$this->order = $order;
		return $this;
	}
	
	/**
	  * 获取分页条件
	  * @param string $limit
	  * @return $this
	*/
	public function limit($limit)
	{
		$this->limit = $limit;
		return $this;
	}
	
	
	/**
	  * 添加数据的方法
	  * @param array  $data  默认 是post中的数据
	*/
	public function add($data = array())
	{
		//如果 $data 为空
		if (empty($data)) {
			$data = $_POST;
		}
	
		$fields = array(); 			//存储字段
		$values = array();			//要插入的值
		//对象 post中数据 跟 $this->fieldList 数据  进行匹配
		foreach ($data as $k => $v) {
			if (in_array($k, $this->fieldList)) {
					$fields[] = $k;
					$values[] = $v;
			} 
		}
	
		//定义sql 语句
		$sql = "insert into {$this->tabName} (".implode(',', $fields).") values('".implode("','", $values)."')";
		//发送 执行sql
		mysql_query($sql);
		//返回 自增id
		return mysql_insert_id($this->link);
	}
	
	/**
	  * 修改数据
	  * @Param array $data  默认取post中的数据
	*/
	public function save($data = array())
	{
		if (empty($data)) {
			$data = $_POST;
		}

		$fields = array();			//空数组
		//对象 data中数据 和 字段列表 进行匹配
		foreach ($data as $k => $v) {
			if (in_array($k, $this->fieldList) && $k != $this->pk) {
				$fields[] = "{$k}='{$v}'";
			}
		}
	
		//定义sql
		$sql = "update {$this->tabName} set ".implode(',', $fields)." where {$this->pk}='{$data[$this->pk]}'";
		//发送执行sql
		mysql_query($sql, $this->link);
		//返回受影响行数
		return mysql_affected_rows($this->link);
	}
	
	/**
	  * 删除 数据的方法
	  * @param int $pkValue  主键值
	*/
	public function delete($pkValue)
	{
		//定义sql
		$sql = "delete from {$this->tabName} where {$this->pk}='{$pkValue}'";
		//执行发送 sql
		mysql_query($sql, $this->link);
		//返回 影响行数
		return mysql_affected_rows($this->link);
	}
	
	/**
	  * 增删改 的sql
	  * @param string  $sql
	  * @return 返回影响行数
	*/
	public function exec($sql)
	{
		//发送执行sql
		mysql_query($sql, $this->link);
		//返回影响行数
		return mysql_affected_rows();
	}
	
	/**
	  * 查询
	  * @param  string $sql
	  * @return array		
	*/
	public function query($sql)
	{
		//发送执行sql
		$result = mysql_query($sql, $this->link);
		//处理结果集
		if ($result) {
			if(mysql_num_rows($result) > 0) {
				$list = array();			//定义空数组
				while ($rows = mysql_fetch_assoc($result)) {
					$list[] = $rows;
				}
				return $list;
			}
			mysql_free_result($result);
		}
		return false;
	}
	
	/**
	  * 自动获取 主键名   自动获取表中所有字段
	*/
	private function getField()
	{
		//定义 sql 语句
		$sql = "desc {$this->tabName}";
		//发送 执行sql
		$result = mysql_query($sql, $this->link);
		//定义空数组
		$fieldList = array();
		//处理结果集
		while ($rows = mysql_fetch_assoc($result)) {
			//判断是否是主键
			if ($rows['Key'] == 'PRI') {
				$this->pk = $rows['Field'];
			}
			//获取 字段名
			$fieldList[] = $rows['Field'];
		}
		$this->fieldList = $fieldList;
	}
	
	/**
	  * 获取总记录条数的方法
	*/
	public function count()
	{
		$where = "";
		if (!empty($this->where)) {
			$where = "where {$this->where}";
			$this->where = null;
		}
		$sql = "select count(*) from {$this->tabName} {$where}";
		$result = mysql_query($sql);
		return mysql_result($result, 0, 0);
	}
	
	/**
	  * 析构方法  销毁数据库连接资源
	*/
	public function __destruct()
	{
		mysql_close($this->link);
	}
}