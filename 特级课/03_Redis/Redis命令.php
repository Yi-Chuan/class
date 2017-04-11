笔记
简介
===========================
redis是一个key-value存储系统。
和Memcached类似，它支持存储的value类型相对更多，
包括string(字符串)、哈希、list(链表)、set(集合)和zset(有序集合)。
这些数据类型都支持push/pop、add/remove及取交集并集和差集及更丰富的操作，而且这些操作都是原子性的。

在此基础上，redis支持各种不同方式的排序。与memcached一样，为了保证效率，数据都是缓存在内存中。
区别的是redis会周期性的把更新的数据写入磁盘或者把修改操作写入追加的记录文件，并且在此基础上实现了master-slave(主从)同步。

Redis 是一个高性能的key-value数据库。
 redis的出现，很大程度补偿了memcached这类key/value存储的不足，在部 分场合可以对关系数据库起到很好的补充作用。
它提供了Python，Ruby，Erlang，PHP客户端，使用很方便。


性能
===========================
ACID
==========================================================
ACID，指数据库事务正确执行的四个基本要素的缩写。包含：原子性(Atomicity）、一致性（Consistency）、隔离性（Isolation）、持久性（Durability）。一个支持事务（Transaction）的数据库系统，必需要具有这四种特性，否则在事务过程（Transaction processing）当中无法保证数据的正确性，交易过程极可能达不到交易方的要求。
　　
事物处理
整个事务中的所有操作，要么全部完成，要么全部不完成，不可能停滞在中间某个环节。事务在执行过程中发生错误，会被回滚（Rollback）到事务开始前的状态，就像这个事务从来没有执行过一样。
一致性
在事务开始之前和事务结束以后，数据库的完整性约束没有被破坏。
隔离性
两个事务的执行是互不干扰的，一个事务不可能看到其他事务运行时，中间某一时刻的数据。
持久性
在事务完成以后，该事务所对数据库所作的更改便持久的保存在数据库之中，并不会被回滚。


具体操作：
===================================
1. 安装redis 并布置环境（指定后台运行）
 # tar -zxvf redis-2.4.17.tar.gz  解压
 # cd redis-2.4.17  进入目录
 # make   编译
 # make PREFIX=/usr/local/redis install  指定目录安装
 # cd /usr/local/redis/ 进入安装后的目录
 # mkdir etc logs 新建两个目录
 # cp /lamp/redis-2.4.17/redis.conf etc/  复制配置文件
 # cd etc/
 # vi redis.conf
   修改配置文件：开启后台运行、指定日志文件。
 #./redis-server ../etc/redis.conf   启动
 #netstat -tunpl |grep redis

# ./redis-server /usr/local/redis/etc/redis.conf  启动
# ps -ef | grep redis 查看进程
# netstat -tunpl | grep 6379 查看端口
# ./redis-cli 客户端命令链接服务器
redis 127.0.0.1:6379>
redis 127.0.0.1:6379>quit 退出

# pkill redis-server 结束redis进程。
或： # ./redis-cli shutdown 执行关闭


flushdb:删除所有的数据

Redis的数据类型
=================================
1. 共计5种类型：string(字符串)、hash(哈希表) list(双向链表)、set(集合)和zset(有序集合)
2. String（子串类型）
--------------------------------------------
   set 命令：设置一个键和值，键存在则只覆盖，返回ok
   > set 键  值    例如： >set name zhangsan

   get 命令：获取一个键的值，返回值
   > get 键 	   例如：>get name

   setnx命令：设置一个不存在的键和值（防止覆盖），
   > setnx 键 值  	若键已存在则返回0表示失败

   setex命令：设置一个指定有效期的键和值（单位秒）
   > setex 键 [有效时间] 值  例如: >setex color 10 red
    不写有效时间则表示永久有效，等价于set

   setrange命令：替换子字符串 (替换长度由子子串长度决定)
   > setrange 键 位置 子字串
   > setrange name 4 aa  将name键对应值的第4个位置开始替换

   mset命令：批量设置键和值,成功则返回ok
   > mset 键1 值1 键2 值2 键3 值3 ....

   msetnx命令：批量设置不存在的键和值,成功则返回ok
   > msetnx 键1 值1 键2 值2 键3 值3 ....

   getset命令：获取原值，并设置新值

   getrange命令：获取指定范围的值
   >getrange 键 0 4     //获取指定0到4位置上的值

   mget命令： 批量获取值
   >mget 键1 键2 键3....

   incr命令： 指定键的值做加加操作，返回加后的结果。
   >  键        例如： >incr kid
   incrby命令： 设置某个键加上指定值
   > incrby 键 m    //其中m可以是正整数或负整数

   decr命令： 指定键的值做减减操作，返回减后的结果。
   > decr 键        例如： >decr kid
   decrby命令： 设置某个键减上指定值
   > decrby 键 m    //其中m可以是正整数或负整数

   append命令：给指定key的字符串追加value，返回新字符串值的长度
   >append 键 追加字串

   strlen求长度 >strlen 键名   //返回对应的值。

3. hashes类型
------------------------------------------
  hset命令：设置一个哈希表的键和值
  >hset hash名 键  值
  如：>hset user:001 name zhangsan
  hget命令： 获取执行哈希名中的键对应值

  hsetnx命令：设置一个哈希表中不存在的键和值
  >hsetnx hash名 键  值  //成功返回1，失败返回0
  如：>hsetnx user:001 name zhangsan

  hmset命令:hmset user:001 username zhangsan age 20 sex 1 批量设置
  hmget user:001 username age sex:批量获取值

>hexists user:001 name //是否存在， 若存在返回1

>hlen user:001  //获取某哈希user001名中键的数量

>hdel user:001 name //删除哈希user:001 中name键

>hkeys user:002   //返回哈希名为user:002中的所有键。
>hvals user:002   //返回哈希名为user:002中的所有值。
>hgetall user:002 //返回哈希名为user:002中的所有键和值。
  
4. list类型（双向链表结构）
--------------------------------------------
   list即可以作为“栈”也可以作为"队列"。
操作：
 >lpush list1 "world"  //在list1头部压入一个字串
 >lpush list1 "hello"  // 在list1头部压入一个字串
 >lrange list1 0 -1  //获取list1中内容
	0:表示开头  -1表示结尾。

 >rpush list2 "world"  //在list2尾部压入一个字串
 >rpush list2 "hello"  // 在list2尾部压入一个字串
 >lrange list2 0 -1  //获取list2中内容
	0:表示开头  -1表示结尾。

 >linsert list2 before hello there
 在key对应list的特定位置前或后添加字符串

 >lset list2 1 "four"
 修改指定索引位置上的值

 >lrem list2 2 "hello"  //删除前两个hello值
 >lrem list2 -2 "hello" //删除后两个hello值
 >lrem list2 0 "hello"  //删除所有hello值

 >ltrim mylist8 1 3	//删除此范围外的值

 >lpop list2   //从list2的头部删除元素，并返回删除元素
 >rpop list2   //从list2的尾部删除元素，并返回删除元素
 >rpoplpush list1 list2	//将list1的尾部一个元素移出到list2头部。并返回

 >lindex list2 1 //返回list2中索引位置上的元素
 >llen list2 //返回list2上长度


 5.无序集合sets类型和操作
-------------------------------
 >sadd myset "hello" //向myset中添加一个元素
  成功返回1，失败(重复)返回0

 >smembers myset //获取myset中的所有元素(结果是无序的)

 >srem myset "one" //从myset中删除一个one
  成功返回1，失败(不存在)返回0

 >spop myset //随机返回并删除myset中的一个元素
 >srandmember myset //随机获取myset中的一个元素，但是不删除

 > smove myset1 myset2 zhangsan:将myset1中zhangsan移动到myset2中
 > scard myset1 返回myset1的个数
 > sismember myset zhangsan:判断张三是否在myset中

 >sdiff myset1 myset2 //返回两个集合的差集
 以myset1为标准，获取myset2中不存在的。
 >sdiffstore dstset myset1 myset2 ...// 返回所有集合的差集，并保存到dstset中

 >sinter myset1 myset2 myset3... // 返回N个集合中的交集
 >sinterstore dstset myset1 myset2 ... // 返回N个集合的交集并存储到dstset中

 > sunion myset1 myset2 ...//返回所有集合的并集
 > sunionstore dstset myset1 myset2// 返回所有集合的并集，并存储到dstset中

 6.有序集合
-----------------------------------------
 > zadd zset 1 one 向zset中添加one，排序为1排序
 > zrem zset one:删除zset中one

 > zincrby zset 2 one:如果one存在，则顺序增加2，如果one不存在，那么就是2

 > zrank zset one:返回one在zset中排名(从小到大的排序)
 > zrevrank zset one:返回one在zset中排名(从大到小的排序)

 > zrange zset 0 -1 withscores:根据score排序（根据score从小到大排序）
 > zrevrange zset 0 -1 withscores:根据score排序（根据score从大到小排序）

 > zrangebyscore zset 2 3 withscores:返回集合中score在给定区间的元素（包含2和5）
 > zcount zset 2 3:返回集合中给定区间的数量
 > zcard zset:返回集合中元素的个数
 > zscore zset one:返回one元素的score
 > zremrangebyrank zset 3 3:删除集合中排名在给定区间的元素
 > zremrangebyscore zset 1 2:将zset中从小到大排序结果的score在1-2之间的删除



 Redis常用命令
 =============================
 1. 键值相关命令
 >keys *  //返回键（key）
 >keys list*   //返回名以list开头的所有键（key）
 >exists list1  //判断键名为list1的是否存在
        存在返回1， 不存在返回0
 >del list1 //删除一个键（名为list1）
 >expire list1 10 //设置键名为list1的过期时间为10秒后
 >ttl list1 //查看键名为list1的过期时间，若为-1表示以过期

 >move age 1 //将键名age的转移到1数据库中。
 >select 1 //表示进入到1数据库中，默认在0数据库

 >persist age //移除age的过期时间（设置为过期）



 Redis高级实用特性
==================================
 1. 安全性：为Redis添加密码
-------------------------------
   1.进入配置文件：
	 vi /usr/local/redis/etc/redis.conf
     设置：requirepass redis的密码
   2. 重启服务：
    # ./redis-cli shutdown 执行关闭
	# ./redis-server /usr/local/redis/etc/redis.conf  启动
   3. 登录（两种）
    # ./redis-cli 客户端命令链接服务器
	>auth 密码值  //授权后方可使用

	# ./redis-cli -a  密码 //连接时指定密码来进行授权


 2. 主从复制
------------------------------------------
	操作步骤：
	 1.先将linux虚拟机关闭，之后克隆一个。
	 2.启动两个虚拟机：master（主）和slave（从）
	 3. 在slave（从）中配置一下ip地址
	    # ifconfig eth0 192.168.128.229
		# ping 一下看看通不通。
	 4. 配置从机
	    进入：配置文件
		slaveof  192.168.128.228 6379   //配置连接主机的Redis的ip和端口
		masterauth 密码  //配置连接密码

		最后启动slave（从）机的Redis服务。

	 其他：可以通过info命令中的role属性查看自己角色是master、slave


 3. 事务处理
--------------------------------------------
 >multi   //开启一个事务
 >set age 10 //暂存指令队列
 >set age 20
 >exec    //开始执行（提交事务）
 或>discard //清空指令队列（事务回滚）

 4. 乐观锁
-----------------------------------
  在事务前对被操作的属性做一个：
 > watch age
 >multi   //开启一个事务(在此期间有其他修改，则此处会失败)
 >set age 10 //暂存指令队列
 >set age 20
 >exec    //开始执行（提交事务）
 或>discard //清空指令队列（事务回滚）

 5. 持久化机制(通过修改配置文件做设置)
-----------------------------------
   1. snapshotting(快照)默认方式
	  配置	save
		save 900 1 #900秒内如果超过1个key被修改，则发起快照保存
		save 300 10 #300秒内容如超过10个key被修改，则发起快照保存
		save 60 10000
   2. Append-only file（aof方式）
      配置 appendonly on 改为yes
	  会在bin目录下产生一个.aof的文件

   关于aof的配置
	appendonly yes //启用aof 持久化方式
	# appendfsync always //收到写命令就立即写入磁盘，最慢，但是保证完全的持久化
	appendfsync everysec //每秒钟写入磁盘一次，在性能和持久化方面做了很好的折中
	# appendfsync no //完全依赖os，性能最好,持久化没保证



  6.  发布及订阅消息
----------------------
	需要开启多个会话端口
	会话1：>subscribe tv1      //监听tv1频道
	会话2：>subscribe tv1 tv2  //监听tv1和tv2频道
	会话3: >publish tv1 消息   //向tv1频道发送一个消息

 7. 使用虚拟内存
-------------------------------
  在redis配置文件中设置
	vm-enabled yes			#开启vm功能
	vm-swap-file  /tmp/redis.swap	#交换出来的value保存的文件路径
	vm-max-memory 1000000	#redis使用的最大内存上限
	vm-page-size 32			#每个页面的大小32字节
	vm-pages 134217728		#最多使用多少页面
	vm-max-threads 4		#用于执行value对象换入患处的工作线程数量




 PHP_Redis
=========================================
一、为php环境安装Redis支持(加模块)
  1. 将owlient-phpredis-2.1.1-1-g90ecd17.tar.gz文件传到服务器上
  2. 解压文件后进入此目录
  3. 由于目录中没有configure配置环境
     执行 /usr/local/php/bin/phpize 来准备一个编译环境
  4. 配置： 加配置
     ./configure --with-php-config=/usr/local/php/bin/php-config

  5. make 编译
  6. make install 安装
  7. 安装成功后就会在如下目录下产生一个redis.so文件
      /usr/local/php/lib/php/extensions/no-debug-non-zts-20060613/
  8. 安装后，使用vi 进入 /usr/local/php/etc/php.ini
       加上：extension=“redis.so”
  9. 重启apache服务即可（查看phpinfo）


二、代码编写：
  $redis=new Redis();  创建Redis对象
  $redis->connect("localhost"); 连接Redis服务器
  $redis->auth("123");   使用密码做登陆验证

  添加操作
  $id=$redis->incr("userid"); 自增一个值
  $redis->rpush("ids",$id); 在尾部追加一个值
  $redis->hmset("key:$id",array("username"=>$username,"password"=>$password)); 添加数据

  获取：
  $data=$redis->lrange("ids","0","-1"); //获取所有id号值
  foreach($data as $val){  //遍历
    $row=$redis->hgetall("key:$val"); //获取对应的信息
    // .....输出到表格中
  }

  删除
  $id=$_GET['id'];
  if($redis->lrem("ids",$id,1)){
    if($redis->del("key:$id")){
       echo "<script>location='index.php'</script>";
    }
  }

  详情
  $data=$redis->hgetall("key:$id");

  修改：
  $redis->hmset("key:$id",array("username"=>$username,"password"=>$password));













