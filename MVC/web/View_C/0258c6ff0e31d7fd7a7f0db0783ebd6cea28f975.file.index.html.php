<?php /* Smarty version Smarty-3.1.18, created on 2016-07-28 02:08:20
         compiled from ".\View\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17563579965de091967-19509866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0258c6ff0e31d7fd7a7f0db0783ebd6cea28f975' => 
    array (
      0 => '.\\View\\user\\index.html',
      1 => 1469671361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17563579965de091967-19509866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579965de200cc4_18143434',
  'variables' => 
  array (
    'title' => 0,
    'users' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579965de200cc4_18143434')) {function content_579965de200cc4_18143434($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>用户名</td>
			<td>邮箱</td>
			<td>操作</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
			<td>
				<a href="index.php?c=user&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>|
				<a href="index.php?c=user&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html><?php }} ?>
