<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 01:41:32
         compiled from ".\View\user\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3061357995d5e8ddfd0-85501514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f08aab288c1ce6758e01baf63a2b0a59da0fef' => 
    array (
      0 => '.\\View\\user\\add.html',
      1 => 1469670060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3061357995d5e8ddfd0-85501514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57995d5ea0ead2_62713372',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57995d5ea0ead2_62713372')) {function content_57995d5ea0ead2_62713372($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<form action="index.php?c=user&a=insert" method="post">
		用户名: <input type="text" name="username">
		<br>
		密码: <input type="password" name="password">
		<br>
		邮箱: <input type="text" name="email">
		<br>
		<input type="submit" value="添加">
	</form>
</body>
</html><?php }} ?>
