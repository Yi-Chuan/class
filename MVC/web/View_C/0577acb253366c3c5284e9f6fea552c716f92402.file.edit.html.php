<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 02:09:36
         compiled from ".\View\user\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3959579969176c0719-00788307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0577acb253366c3c5284e9f6fea552c716f92402' => 
    array (
      0 => '.\\View\\user\\edit.html',
      1 => 1469671771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3959579969176c0719-00788307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57996917818360_09017426',
  'variables' => 
  array (
    'title' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57996917818360_09017426')) {function content_57996917818360_09017426($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<form action="index.php?c=user&a=update" method="post">
		用户名: <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['username'];?>
" name="username">
		<br>
		密码: <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['password'];?>
" name="password">
		<br>
		邮箱: <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['email'];?>
" name="email">
		<br>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
">
		<input type="submit" value="修改">
	</form>
</body>
</html><?php }} ?>
