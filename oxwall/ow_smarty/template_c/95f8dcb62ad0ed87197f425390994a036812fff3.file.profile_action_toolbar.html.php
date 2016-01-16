<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:11:24
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\profile_action_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:6762566e254c910006-13953530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95f8dcb62ad0ed87197f425390994a036812fff3' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\profile_action_toolbar.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6762566e254c910006-13953530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'action' => 0,
    'groups' => 0,
    'group' => 0,
    'cmpsMarkup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e254c92b796_73125724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e254c92b796_73125724')) {function content_566e254c92b796_73125724($_smarty_tpl) {?><div class="ow_profile_gallery_action_toolbar ow_profile_action_toolbar_wrap clearfix ow_stdmargin">
    <ul class="ow_bl ow_profile_action_toolbar clearfix ow_small ow_left">
        <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['action']->value['html'])){?>
                <?php echo $_smarty_tpl->tpl_vars['action']->value['html'];?>

            <?php }elseif(isset($_smarty_tpl->tpl_vars['action']->value['extraLabel'])){?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['action']->value['extraLabel'];?>

                </li>
            <?php }else{ ?>
                <li>
                    <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
 >
                        <?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

                    </a>
                </li>
            <?php }?>
        <?php } ?>
    </ul>

    <?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value){
$_smarty_tpl->tpl_vars["group"]->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

    <?php } ?>

    <?php echo $_smarty_tpl->tpl_vars['cmpsMarkup']->value;?>

</div>
<?php }} ?>