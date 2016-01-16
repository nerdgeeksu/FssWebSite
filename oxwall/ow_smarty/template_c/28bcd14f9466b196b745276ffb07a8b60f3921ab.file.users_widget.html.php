<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:19
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\users_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:24191566e24cf097358-90271507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bcd14f9466b196b745276ffb07a8b60f3921ab' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\users_widget.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24191566e24cf097358-90271507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'widgetId' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24cf0b4fe5_24178203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24cf0b4fe5_24178203')) {function content_566e24cf0b4fe5_24178203($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?>
<div id="<?php echo $_smarty_tpl->tpl_vars['widgetId']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['contId'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>block<?php }else{ ?>none<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['item']->value['users'];?>
</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toolbarId'])){?><div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['toolbarId'];?>
"  style="display: none;"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','class'=>"clearfix",'itemList'=>$_smarty_tpl->tpl_vars['item']->value['toolbar']),$_smarty_tpl);?>
</div><?php }?>
	<?php } ?>
</div><?php }} ?>