<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 03:17:28
         compiled from ".\view\6.html" */ ?>
<?php /*%%SmartyHeaderCode:33485798269520d371-33985250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39ce80481024028542761642d43e62a44546b061' => 
    array (
      0 => '.\\view\\6.html',
      1 => 1469589442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33485798269520d371-33985250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5798269531ea78_25759049',
  'variables' => 
  array (
    'title' => 0,
    'abc' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798269531ea78_25759049')) {function content_5798269531ea78_25759049($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<?php $_smarty_tpl->_capture_stack[0][] = array("buhuo", null, null); ob_start(); ?>
	<div style="width: 100%;height: 10px;background: #369;"></div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<span>模板中定义变量</span>
	<?php $_smarty_tpl->tpl_vars['abc'] = new Smarty_variable('abcdef', null, 0);?>
	<?php echo $_smarty_tpl->tpl_vars['abc']->value;?>

	<br>
	<span>向数组中压入元素</span>
	<?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_variable(array('a','b','c'), null, 0);?>
	<?php $_smarty_tpl->createLocalArrayVariable("arr", null, 0);
$_smarty_tpl->tpl_vars["arr"]->value[] = 'd';?>
	<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>

	<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>

	<?php echo Smarty::$_smarty_vars['capture']['buhuo'];?>

	<?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>

	<?php echo $_smarty_tpl->tpl_vars['arr']->value[3];?>

	<span>捕获capture</span>
	<?php echo Smarty::$_smarty_vars['capture']['buhuo'];?>

	<br>
	<span>调试模式</span>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>


</body>
</html><?php }} ?>
