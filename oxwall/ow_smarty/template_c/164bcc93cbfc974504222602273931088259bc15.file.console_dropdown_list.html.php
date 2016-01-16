<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:52
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\console_dropdown_list.html" */ ?>
<?php /*%%SmartyHeaderCode:16824566e24f0c113a8-67461373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '164bcc93cbfc974504222602273931088259bc15' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\console_dropdown_list.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16824566e24f0c113a8-67461373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24f0c28724_19580816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24f0c28724_19580816')) {function content_566e24f0c28724_19580816($_smarty_tpl) {?><a href="javascript://" class="ow_console_item_link"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>

<span <?php if (empty($_smarty_tpl->tpl_vars['counter']->value['number'])){?>style="display: none;"<?php }?> class="ow_count_wrap OW_ConsoleItemCounter" >
    <span class="<?php if ($_smarty_tpl->tpl_vars['counter']->value['active']){?>ow_count_active<?php }?> ow_count_bg OW_ConsoleItemCounterPlace">
        <span class="ow_count OW_ConsoleItemCounterNumber" <?php if (empty($_smarty_tpl->tpl_vars['counter']->value['number'])){?>style="visibility: hidden;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['counter']->value['number'];?>
</span>
    </span>
</span>
<?php }} ?>