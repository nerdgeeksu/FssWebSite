<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:12:57
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\content_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:15378566e25a9dc1414-52066002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82284b8f27fa4e3f9d67853f6b6c02815e70a2ae' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\content_menu.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15378566e25a9dc1414-52066002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e25a9dfc043_69822338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e25a9dfc043_69822338')) {function content_566e25a9dfc043_69822338($_smarty_tpl) {?><div class="ow_content_menu_wrap">
<ul class="ow_content_menu clearfix">
 	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span<?php if ($_smarty_tpl->tpl_vars['item']->value['iconClass']){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li>
	<?php } ?>
</ul>
</div><?php }} ?>