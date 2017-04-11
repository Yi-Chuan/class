<?php 
//创建简单空间
namespace one;
function love(){
	echo 'iloveyou';
}

\Two\love();


namespace three;
function love(){}

//多层空间
namespace one\Two;
function love(){
	echo 'do you love me??';
}

// \one\love();//根空间下的one空间
// one\love();//two\one\love()

 ?>