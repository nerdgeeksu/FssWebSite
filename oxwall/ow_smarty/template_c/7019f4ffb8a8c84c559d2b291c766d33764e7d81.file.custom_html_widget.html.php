<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:18
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\custom_html_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:20701566e24cec6f243-49488886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7019f4ffb8a8c84c559d2b291c766d33764e7d81' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\custom_html_widget.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20701566e24cec6f243-49488886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24cec7b503_48824441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24cec7b503_48824441')) {function content_566e24cec7b503_48824441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php }else{ ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }} ?>