<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:19
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\controllers\component_panel.html" */ ?>
<?php /*%%SmartyHeaderCode:21304566e24cf31ee19-17752690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9972da70e2e6b9820aed31a309322df5634e0d44' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\controllers\\component_panel.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21304566e24cf31ee19-17752690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24cf32b401_83471850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24cf32b401_83471850')) {function content_566e24cf32b401_83471850($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>