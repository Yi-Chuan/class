<?php /* Smarty version Smarty-3.1.18, created on 2016-07-27 03:08:18
         compiled from ".\view\5.html" */ ?>
<?php /*%%SmartyHeaderCode:2872579821c9240459-07577382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a31e8edbfdc6b2f4d2627ed49a976ff596d2088' => 
    array (
      0 => '.\\view\\5.html',
      1 => 1469588897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2872579821c9240459-07577382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579821c9370f62_74281756',
  'variables' => 
  array (
    'title' => 0,
    'l' => 0,
    'str' => 0,
    'username' => 0,
    'like' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579821c9370f62_74281756')) {function content_579821c9370f62_74281756($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\Class\\lamp148\\Smarty\\web\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\Class\\lamp148\\Smarty\\web\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\wamp\\www\\Class\\lamp148\\Smarty\\web\\libs\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<style type="text/css">
		/*忽略smarty解析*/
		
		body{background: #369;}
		
	</style>
	<link rel="stylesheet" href="./1.css">
</head>
<body>
	<div></div>
	<!-- html注释 smarty解析 但是不显示 -->
	<!-- <?php echo $_smarty_tpl->tpl_vars['l']->value;?>
 -->
	<!-- smarty注释 不解析 -->
	
	<br>
	<span>字符串链接</span>
	<?php echo ($_smarty_tpl->tpl_vars['str']->value).('verymuch');?>

	<br>
	<span>格式日期</span>
	<?php echo smarty_modifier_date_format(time(),'%Y%m%d');?>

	<br>
	<span>使用自己的函数</span>
	<?php echo date('Y-m-d',time());?>

	<br>
	<span>默认值</span>
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? '请登录' : $tmp);?>

	<br>
	<span>变量调节器</span>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['like']->value,13);?>

	<br>
	<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str']->value,'love','like');?>

	<br>
	<?php echo str_replace('love','like',$_smarty_tpl->tpl_vars['str']->value);?>

</body>
</html><?php }} ?>
