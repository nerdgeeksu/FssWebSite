<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:19
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\widget_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:926566e24cf055d27-17704982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bcac14625a70d2e11dac495a7ba031ea54dc977' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\widget_menu.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '926566e24cf055d27-17704982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24cf0628d9_19078941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24cf0628d9_19078941')) {function content_566e24cf0628d9_19078941($_smarty_tpl) {?><div class="clearfix">
	<div class="ow_box_menu">
		<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
			<a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active'])&&$_smarty_tpl->tpl_vars['tab']->value['active']){?> class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a>
		<?php } ?>
	</div>
</div><?php }} ?>