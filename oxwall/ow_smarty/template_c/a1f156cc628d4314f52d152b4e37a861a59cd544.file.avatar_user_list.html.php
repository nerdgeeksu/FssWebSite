<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:18
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\avatar_user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:8224566e24cee9b860-32904267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f156cc628d4314f52d152b4e37a861a59cd544' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\avatar_user_list.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8224566e24cee9b860-32904267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_class' => 0,
    'users' => 0,
    'user' => 0,
    'view_more_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24ceeb4733_80919814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24ceeb4733_80919814')) {function content_566e24ceeb4733_80919814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_lp_avatars<?php if (!empty($_smarty_tpl->tpl_vars['css_class']->value)){?> <?php echo $_smarty_tpl->tpl_vars['css_class']->value;?>
<?php }?>">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list'),$_smarty_tpl);?>
</div>
    <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
<?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['view_more_array']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['view_more_array']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['view_more_array']->value['title'];?>
" class="avatar_list_more_icon"></a><?php }?>
    <?php }?>
    
</div><?php }} ?>