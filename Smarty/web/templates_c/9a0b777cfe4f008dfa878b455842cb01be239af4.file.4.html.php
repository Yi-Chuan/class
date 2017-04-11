<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 02:49:32
         compiled from ".\view\4.html" */ ?>
<?php /*%%SmartyHeaderCode:1923557981ea5d31491-89081280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0b777cfe4f008dfa878b455842cb01be239af4' => 
    array (
      0 => '.\\view\\4.html',
      1 => 1469587770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923557981ea5d31491-89081280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57981ea5e69c97_97937920',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57981ea5e69c97_97937920')) {function content_57981ea5e69c97_97937920($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("language.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(((string)$_smarty_tpl->tpl_vars['l']->value), 'local'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>
</head>
<body>
	<!-- html注释 smarty解析 但是不显示 -->
	<!-- <?php echo $_smarty_tpl->tpl_vars['l']->value;?>
 -->
	
	<br>
	<?php echo $_smarty_tpl->getConfigVariable('username');?>
: <input type="text">
	<br>
	<?php echo $_smarty_tpl->getConfigVariable('password');?>
: <input type="password">
	<br>
	<button><?php echo $_smarty_tpl->getConfigVariable('login');?>
</button>
	<br>
	<a href="4.php?l=cn">中文</a>
	<a href="4.php?l=en">English</a>
	<a href="4.php?l=jn">日本語</a>
</body>
</html><?php }} ?>
