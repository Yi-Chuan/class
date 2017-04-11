<?php 

 namespace one;
 class tbj{}


 //PDO Exception 系统类

 class MyException extends \Exception{}


 //动态特征  变量不受命名空间限制,在使用动态特征时 注意尽量使用单引号
 $str = '\one\tbj';

 $o = new $str;
 var_dump($o);



 ?>