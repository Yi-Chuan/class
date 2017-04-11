<?php
$redis=new Redis();
$redis->connect("localhost");
$redis->auth("123");
