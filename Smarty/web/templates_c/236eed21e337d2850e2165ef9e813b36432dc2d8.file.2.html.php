<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 02:06:00
         compiled from ".\view\2.html" */ ?>
<?php /*%%SmartyHeaderCode:31470579815e2d6fec4-28377647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236eed21e337d2850e2165ef9e813b36432dc2d8' => 
    array (
      0 => '.\\view\\2.html',
      1 => 1469585010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31470579815e2d6fec4-28377647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579815e3029818_23120596',
  'variables' => 
  array (
    'title' => 0,
    'bool' => 0,
    'pai' => 0,
    'age' => 0,
    'arr' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579815e3029818_23120596')) {function content_579815e3029818_23120596($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<h3>普通变量</h3>
	<span>字符串</span>
	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	<br>
	<span>布尔</span>
	<?php echo $_smarty_tpl->tpl_vars['bool']->value;?>

	<br>
	<span>数字</span>
	<?php echo $_smarty_tpl->tpl_vars['pai']->value;?>

	<br>
	<?php echo $_smarty_tpl->tpl_vars['age']->value;?>

	<br>
	<span>数组</span>
	<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>

	<br>
	<span>对象</span>
	<?php echo $_smarty_tpl->tpl_vars['phone']->value->name;?>

	<br>
	<h3>超全局变量</h3>
	<?php echo $_GET['name'];?>

	<br>
	<?php echo $_POST['sex'];?>

	<br>
	<?php echo $_COOKIE['like'];?>

	<br>
	<?php echo $_SESSION['love'];?>

	<br>
	<?php echo $_SERVER['HTTP_HOST'];?>


</body>
</html><?php }} ?>
