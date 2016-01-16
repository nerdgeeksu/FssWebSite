<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:09:19
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_themes\simplicity\master_pages\general.html" */ ?>
<?php /*%%SmartyHeaderCode:12049566e24cf3f3422-13702983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146f634a19f01ac71cb89efcd3141f04c99dc67b' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_themes\\simplicity\\master_pages\\general.html',
      1 => 1441713654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12049566e24cf3f3422-13702983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_menu' => 0,
    'siteUrl' => 0,
    'heading_icon_class' => 0,
    'heading' => 0,
    'content' => 0,
    'bottom_menu' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e24cf4ab970_00325224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e24cf4ab970_00325224')) {function content_566e24cf4ab970_00325224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_page_wrap">
	<div class="ow_menu_fullpage">
		<div class="ow_menu_fullpage_wrap"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</div>
	</div>
	<div class="ow_site_panel clearfix">
			<a class="ow_logo ow_left" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"></a>
			<div class="ow_nav_btn"></div>
			<div class="ow_console_right">
				<?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

			</div>
			<div class="ow_menu_wrap"><?php echo smarty_function_component(array('class'=>'BASE_CMP_MainMenu','responsive'=>true),$_smarty_tpl);?>
</div>
	</div>
	<div class="ow_header">
        <div class="ow_header_pic"></div>
	</div>
	
	<div class="ow_page_padding">
		<div class="ow_page_container">
			<div class="ow_canvas">
				<div class="ow_page ow_bg_color clearfix">
					<h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
					<div class="ow_content">
						<?php echo smarty_function_add_content(array('key'=>'base.add_page_top_content'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

						<?php echo smarty_function_add_content(array('key'=>'base.add_page_bottom_content'),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

			<div class="ow_copyright">
				<?php echo smarty_function_text(array('key'=>'base+copyright'),$_smarty_tpl);?>

			</div>
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>    
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>

<script type="text/javascript">
	$(window).scroll(function() {
	var $menuwrappos = $('.ow_menu_wrap').offset().top;
    if ($(this).scrollTop() > $menuwrappos) { 
        $('.ow_page_wrap').addClass('ow_hidden_menu');
    }
    else {
    	$('.ow_page_wrap').removeClass('ow_hidden_menu');
    }
	});
	$('.ow_nav_btn').click(function() {
    	if ($('body').hasClass('ow_menu_active')) {
    		$('body').removeClass('ow_menu_active');
    	}
    	else {
    		$('body').addClass('ow_menu_active');
    	}
    })
    $('.ow_menu_fullpage_wrap a').click(function() {
    	$('body').removeClass('ow_menu_active');
    })
</script><?php }} ?>