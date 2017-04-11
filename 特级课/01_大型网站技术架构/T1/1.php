<?php 

class Model
{
	public $pdo;

	// 构造方法
	public function __construct()
	{
		// 读取PDO操作
		$this->readPdo = new PDO('mysql:host=localhsot;dbname=lamp134;charset=utf8', 'root', '');

		// 写入操作
		$this->writePdo = new PDO('mysql:host=192.168.134.199;dbname=lamp134;charset=utf8', 'root', '');
	}

	// 执行数据库的查询
	public function select()
	{
		$this->readPdo->query('select * from user');

		// 进一步的操作
	}

	// 执行数据库的增删改
	public function insert()
	{
		$this->writePdo->exec('insert into user(username,age,sex) values("zhangsan", 20, 1)');
	}
}

