<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 17:58:26
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\controllers\user_standard_sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:1543566e22424d7540-93169050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a842fe0642227fc0df6b413594dd1b32e1ed1c15' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\controllers\\user_standard_sign_in.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1543566e22424d7540-93169050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_in_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e22424e0058_19593803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e22424e0058_19593803')) {function content_566e22424e0058_19593803($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_sign_in_wrap {
	position:absolute;
	top:200px;
	left:50%;
	margin:0 0 0 -351px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_sign_in_cont">
    <?php echo $_smarty_tpl->tpl_vars['sign_in_form']->value;?>

</div>
<?php }} ?>