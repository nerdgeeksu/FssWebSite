<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 17:58:26
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_themes\simplicity\master_pages\html_document.html" */ ?>
<?php /*%%SmartyHeaderCode:31651566e22425fc601-68475638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66aac88d735fe3495401b65c38a86e9eca7428b' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_themes\\simplicity\\master_pages\\html_document.html',
      1 => 1441713654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31651566e22425fc601-68475638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'direction' => 0,
    'title' => 0,
    'headData' => 0,
    'bodyClass' => 0,
    'pageBody' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e2242610b77_03540199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e2242610b77_03540199')) {function content_566e2242610b77_03540199($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headData']->value;?>

</head>
<!--[if IE 8]><body class="ow ie8<?php echo $_smarty_tpl->tpl_vars['bodyClass']->value;?>
"><![endif]-->
<!--[if !IE 8]><!--><body class="ow<?php echo $_smarty_tpl->tpl_vars['bodyClass']->value;?>
"><!--<![endif]-->
<?php echo $_smarty_tpl->tpl_vars['pageBody']->value;?>

</body>
</html>
<?php }} ?>