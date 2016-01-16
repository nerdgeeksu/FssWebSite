<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:10:20
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\admin\views\components\admin_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:106566e250c6ef711-32360480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8236b7ae9e4a71c1712caf13c73a1b4df3598ce3' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\admin\\views\\components\\admin_menu.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106566e250c6ef711-32360480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subMenuClass' => 0,
    'category' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e250c711c75_73258402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e250c711c75_73258402')) {function content_566e250c711c75_73258402($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
?><ul class="<?php if ($_smarty_tpl->tpl_vars['subMenuClass']->value){?><?php echo $_smarty_tpl->tpl_vars['subMenuClass']->value;?>
<?php }else{ ?>ow_admin_submenu_hover<?php }?>">
    <li class="ow_admin_submenu_title"><?php echo smarty_function_text(array('key'=>"admin+sidebar_".((string)$_smarty_tpl->tpl_vars['category']->value)),$_smarty_tpl);?>
</li>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['new_window'])){?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
    <?php } ?>
</ul><?php }} ?>