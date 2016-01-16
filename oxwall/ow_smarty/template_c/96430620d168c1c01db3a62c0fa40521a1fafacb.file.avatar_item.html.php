<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:18
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\decorators\avatar_item.html" */ ?>
<?php /*%%SmartyHeaderCode:7641566e24cef2c9e1-00145564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96430620d168c1c01db3a62c0fa40521a1fafacb' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\decorators\\avatar_item.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7641566e24cef2c9e1-00145564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24cf01cf90_17823536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24cf01cf90_17823536')) {function content_566e24cf01cf90_17823536($_smarty_tpl) {?>
<div class="ow_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['isMarked'])){?><div class="ow_ic_bookmark ow_bookmark_icon"></div><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img alt=""<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['attrs'];?>
<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /></a>
<?php }else{ ?>
<img alt="" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['attrs'];?>
<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><span class="ow_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?>
</div><?php }} ?>