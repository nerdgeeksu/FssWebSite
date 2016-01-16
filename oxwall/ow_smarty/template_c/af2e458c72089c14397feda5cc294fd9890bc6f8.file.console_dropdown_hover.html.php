<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:52
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\console_dropdown_hover.html" */ ?>
<?php /*%%SmartyHeaderCode:789566e24f0b64d07-19751761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2e458c72089c14397feda5cc294fd9890bc6f8' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\console_dropdown_hover.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '789566e24f0b64d07-19751761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24f0b69997_13147728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24f0b69997_13147728')) {function content_566e24f0b69997_13147728($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="ow_console_item_link"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>
<span class="ow_console_more"></span><?php }} ?>