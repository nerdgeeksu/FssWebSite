<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:11:55
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\admin\views\controllers\base_dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:12517566e256b4ebdf1-07886972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25aa3d8696d53b0cd687be8fabaff0ad6ba12ab1' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\admin\\views\\controllers\\base_dashboard.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12517566e256b4ebdf1-07886972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminDashboardIframeUrl' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e256b4f22d9_89773323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e256b4f22d9_89773323')) {function content_566e256b4f22d9_89773323($_smarty_tpl) {?><div class="ow_stdmargin">
    <iframe class="ow_full" src="<?php echo $_smarty_tpl->tpl_vars['adminDashboardIframeUrl']->value;?>
" style="border: 0pt none ; width: 100%; height: 250px;" frameborder="0"></iframe>
</div>
<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>
<?php }} ?>