<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:52
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\console_list.html" */ ?>
<?php /*%%SmartyHeaderCode:31771566e24f0bcbd05-62625010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03c25e3c08d107ea0aa64ac1cf10d61815ade89b' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\console_list.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31771566e24f0bcbd05-62625010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewAll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24f0bd7165_77323123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24f0bd7165_77323123')) {function content_566e24f0bd7165_77323123($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_console_list_wrapper OW_ConsoleListContainer">
    <div class="ow_nocontent OW_ConsoleListNoContent"><?php echo smarty_function_text(array('key'=>'base+no_items'),$_smarty_tpl);?>
</div>
    <ul class="ow_console_list OW_ConsoleList">

    </ul>
    <div class="ow_preloader_content ow_console_list_preloader OW_ConsoleListPreloader" style="visibility: hidden"></div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['viewAll']->value)){?>
    <div class="ow_console_view_all_btn_wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['viewAll']->value['url'];?>
" class="ow_console_view_all_btn"><?php echo $_smarty_tpl->tpl_vars['viewAll']->value['label'];?>
</a></div>
<?php }?>
<?php }} ?>