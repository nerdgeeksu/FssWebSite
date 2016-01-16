<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:11:10
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_plugins\newsfeed\views\components\update_status.html" */ ?>
<?php /*%%SmartyHeaderCode:19307566e253e16c097-00164926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929afb4c287c08002ebac5dbe4261997e208760d' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_plugins\\newsfeed\\views\\components\\update_status.html',
      1 => 1441713646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19307566e253e16c097-00164926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'attachment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e253e1870b9_26275259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e253e1870b9_26275259')) {function content_566e253e1870b9_26275259($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


textarea.ow_newsfeed_status_input {
    height: 50px;
}

textarea.ow_newsfeed_status_input.invitation {
    height: 20px;
}

.newsfeed-attachment-preview {
    width: 95%;
}
.ow_side_preloader {
	float: right;
	padding: 0px 4px 0px 0px;
	margin-top: 6px;
}
.ow_side_preloader {
	display: inline-block;
	width: 16px;
	height: 16px;
	background-repeat: no-repeat;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"newsfeed_update_status")); $_block_repeat=true; echo smarty_block_form(array('name'=>"newsfeed_update_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="form_auto_click">
		<div class="clearfix">
			<div class="newsfeed_update_status_picture">
			</div>
			<div class="newsfeed_update_status_info">
				<div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>"status",'class'=>"ow_newsfeed_status_input"),$_smarty_tpl);?>
</div>
			</div>
		</div>
		
                <div id="attachment_preview_<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-oembed" class="newsfeed-attachment-preview ow_smallmargin" style="display: none;"></div>
                
                    <?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>

                
            
		<div class="ow_submit_auto_click" style="text-align: left;">
			<div class="clearfix ow_status_update_btn_block">
				<span class="ow_attachment_btn"><?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>
</span>
                                <span class="ow_attachment_icons">
                                    <span class="ow_attachments" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-btn-cont" >
                                        <span class="buttons clearfix">
                                            <a class="image" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-btn" href="javascript://"></a>
                                        </span>
                                    </span>
                                </span>
				<span class="ow_side_preloader_wrap"><span class="ow_side_preloader ow_inprogress newsfeed-status-preloader" style="display: none;"></span></span>
			</div>
		</div>
	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"newsfeed_update_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>