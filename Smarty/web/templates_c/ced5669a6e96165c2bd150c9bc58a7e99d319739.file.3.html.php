<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 02:21:03
         compiled from ".\view\3.html" */ ?>
<?php /*%%SmartyHeaderCode:225225798171f82fe25-80466558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced5669a6e96165c2bd150c9bc58a7e99d319739' => 
    array (
      0 => '.\\view\\3.html',
      1 => 1469586060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225225798171f82fe25-80466558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5798171f9aacf7_48254143',
  'variables' => 
  array (
    'title' => 0,
    'ttime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798171f9aacf7_48254143')) {function content_5798171f9aacf7_48254143($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<h3>内置变量|保留变量</h3>
	<span>模板内置时间戳</span>
	<?php echo time();?>

	<br>
	<?php echo $_smarty_tpl->tpl_vars['ttime']->value;?>

	<br>
	<span>模板引擎获取常量</span>
	<!-- <?php echo @constant('LOVE');?>
 -->
	<!-- <?php echo @constant('LIKE');?>
 -->
	<br>
	<span>获取当前正在处理的模板名</span>
	<?php echo basename($_smarty_tpl->source->filepath);?>

	<br>
	<span>获取当前模板文件存放目录</span>
	<?php echo dirname($_smarty_tpl->source->filepath);?>

	<br>
	<span>获取当前模板引擎的版本信息</span>
	<?php echo 'Smarty-3.1.18';?>

	<br>
	<span>获取左右定界符</span>
	<?php echo '{';?>

	<?php echo '}';?>

	<br>
	<span>获取当前配置文件的信息</span>
	<?php echo $_smarty_tpl->getConfigVariable('username');?>

	<?php echo $_smarty_tpl->getConfigVariable('password');?>

</body>
</html><?php }} ?>
