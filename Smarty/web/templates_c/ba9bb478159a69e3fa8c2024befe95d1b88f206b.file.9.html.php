<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 03:51:03
         compiled from ".\view\9.html" */ ?>
<?php /*%%SmartyHeaderCode:1886857982e0a3ed921-58161636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9bb478159a69e3fa8c2024befe95d1b88f206b' => 
    array (
      0 => '.\\view\\9.html',
      1 => 1469591462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1886857982e0a3ed921-58161636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57982e0a526124_17983645',
  'variables' => 
  array (
    'title' => 0,
    'i' => 0,
    'user' => 0,
    'v' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57982e0a526124_17983645')) {function content_57982e0a526124_17983645($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<span>for循环</span>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 2;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - (0) : 0-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value;?>

	<?php }} ?>
	<span>数组遍历</span>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>

		<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>

	<?php } ?>
	<br>
	<span>if else</span>
	<br>
	<?php if ($_smarty_tpl->tpl_vars['total']->value>=90&&$_smarty_tpl->tpl_vars['total']->value<=100) {?>
		给你买个锤子
	<?php } elseif ($_smarty_tpl->tpl_vars['total']->value>=80&&$_smarty_tpl->tpl_vars['total']->value<=90) {?>
		给你买个炊饼
	<?php } else { ?>
		揍你一顿
	<?php }?>
</body>
</html><?php }} ?>
