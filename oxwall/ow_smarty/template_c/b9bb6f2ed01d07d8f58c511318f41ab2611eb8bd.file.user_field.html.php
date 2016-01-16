<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:52
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_plugins\mailbox\views\components\user_field.html" */ ?>
<?php /*%%SmartyHeaderCode:28415566e24f0acb3c7-07763556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9bb6f2ed01d07d8f58c511318f41ab2611eb8bd' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_plugins\\mailbox\\views\\components\\user_field.html',
      1 => 1441713646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28415566e24f0acb3c7-07763556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'defaultAvatarUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24f0ad4875_77984483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24f0ad4875_77984483')) {function content_566e24f0ad4875_77984483($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
?><?php echo $_smarty_tpl->tpl_vars['input']->value;?>

<input name="mailbox_new_message_user" id="mailbox_new_message_user" type="text" class="invitation userFieldInputControl" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?php echo smarty_function_text(array('key'=>'mailbox+to'),$_smarty_tpl);?>
" />
<div style="display: block;" class="ow_mailchat_autocomplete" id="userFieldAutocompleteControl">
    <div class="ow_mailchat_autocomplete_inner">
        <ul style="display: block;" id="userFieldUserList">
            <li class="clearfix" style="display: none;" id="userFieldUserListItem-notfound">
                <span class="ow_chat_user_not_found"><?php echo smarty_function_text(array('key'=>"mailbox+user_not_found"),$_smarty_tpl);?>
</span>
            </li>
        </ul>
    </div>
</div>

<ul style="display: none;" id="userFieldUserListPrototype">
    <li style="display: none;" id="userFieldUserListItemPrototype" class="userFieldUserListItem">
        <a class="clearfix ow_chat_item" href="javascript://">
            <span class="ow_chat_item_photo_wrap">
                <span class="ow_chat_item_photo">
                    <span class="ow_chat_in_item_photo"><img width="32px" height="32px" alt="" src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" id="userFieldUserListItemAvatarUrl"></span>
                </span>
            </span>
            <span class="ow_chat_item_author">
                <span class="ow_chat_in_item_author" id="userFieldUserListItemUsername"></span>
            </span>
        </a>
    </li>
</ul>
<?php }} ?>