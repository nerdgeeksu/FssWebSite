<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:10:20
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_themes\simplicity\master_pages\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:17165566e250c747832-88845656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a66ae72ee39a0d5c1c337ca873177c830914070' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_themes\\simplicity\\master_pages\\admin.html',
      1 => 1441713654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17165566e250c747832-88845656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'siteName' => 0,
    'notifications' => 0,
    'notification' => 0,
    'menuArr' => 0,
    'item' => 0,
    'heading' => 0,
    'heading_icon_class' => 0,
    'content' => 0,
    'ow_plugin_xp' => 0,
    'softVersion' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e250c7b2807_69178947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e250c7b2807_69178947')) {function content_566e250c7b2807_69178947($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_component')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_script')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    #console-notifications-wrapper {
        position: absolute; 
        z-index: 100; 
        display: block;
    }

    #console-notifications-wrapper .console_tooltip {
        opacity: 1; 
        top: 22px !important; 
        display: none;
    }

    #console-notifications-wrapper .ow_count_wrap {
        width: auto;
    }

    #console-notifications-wrapper .ow_count_wrap .ow_count {
        right: 0px;
    }
    
    #console-notifications-wrapper .ow_console_list li {
        margin: 0 0 4px;
        border: 1px solid #ececec;
        border-radius: 2px;
    }

    .ow_footer .ow_canvas .ow_page {
        padding: 20px 0;
    }

    .ow_footer .ow_canvas .ow_page .ow_remark_wrapper{
        float:left;
    }

    .ow_footer .ow_canvas .ow_page .ow_powered_by{
        float:right;
        line-height:15px;
        font-size:11px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_admin_page_wrap">
    <div class="ow_admin_page_padding">
        <!-- head wrapper -->
        <div class="ow_header ow_admin_header clearfix">
            <?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

            <div class="ow_site_panel clearfix">
                <a class="ow_admin_home_btn ow_admin_menu_item home ow_left" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
">
                    <span class="ow_admin_menu_item_label"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</span>
                </a>
                <?php echo smarty_function_add_content(array('key'=>'admin.site_panel_left_content'),$_smarty_tpl);?>

                <div class="ow_admin_console_update">
                    <a id="admin_console_update_link" class="ow_admin_console_update_link" href="#"></a>
                    <?php if (!empty($_smarty_tpl->tpl_vars['notifications']->value)){?>           
                        <span class="ow_count_wrap">
                            <span class="ow_count_bg">
                                <span class="ow_count ow_count_active"><?php echo count($_smarty_tpl->tpl_vars['notifications']->value);?>
</span>
                            </span>
                        </span>
                    <?php }?>
                    <div id="console-notifications-wrapper" class="OW_ConsoleItemContent">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_left")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_left"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="ow_console_list_wrapper">
                                <?php if (!empty($_smarty_tpl->tpl_vars['notifications']->value)){?>
                                    <ul class="ow_console_list">
                                        <?php  $_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notification']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->key => $_smarty_tpl->tpl_vars['notification']->value){
$_smarty_tpl->tpl_vars['notification']->_loop = true;
?>
                                            <li class="ow_console_list_item ow_admin_config_item ow_admin_console_type_<?php echo $_smarty_tpl->tpl_vars['notification']->value['type'];?>
">
                                                <div class="ow_admin_notification_pic"></div>
                                                <div class="ow_admin_notification_text ow_left ow_small"><?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>
</div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }else{ ?>
                                    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"base+no_items"),$_smarty_tpl);?>
</div>
                                <?php }?>
                            </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_left"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
                <?php echo smarty_function_add_content(array('key'=>'admin.site_panel_right_content'),$_smarty_tpl);?>

            </div>
        </div>
        <!-- end of head wrapper -->

        <!-- left menu wrapper -->
        <div id="main_left_menu" class="ow_admin_menu_wrap sticky">
            <div class="ow_admin_menu">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <div class="ow_admin_menu_item <?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']){?> active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['firstLink'];?>
" class="ow_admin_menu_item_label"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
                        <div class="ow_admin_menu_arrow"></div>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['sub_menu'];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']){?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['active_sub_menu'];?>

                    <?php }?>
                <?php } ?>
            </div>
        </div>
        <!-- end of left menu wrapper -->

        <!-- content wrapper -->
        <div class="ow_page_container ow_admin ">
            <div class="ow_canvas">
                <div class="ow_page">
                    <?php if (!empty($_smarty_tpl->tpl_vars['heading']->value)){?>
                        <h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['heading']->value;?>

                        </h1>
                    <?php }?>
                    <div class="ow_content">
                        <?php echo smarty_function_add_content(array('key'=>'admin.add_page_top_content'),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                        <?php echo smarty_function_add_content(array('key'=>'admin.add_page_bottom_content'),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of content wrapper -->
    </div>
</div>
<!-- footer wrapper -->
<div class="ow_footer ow_admin">
    <div class="ow_canvas">
        <div class="ow_page clearfix">
            <div class="ow_remark_wrapper">
                <?php if (empty($_smarty_tpl->tpl_vars['ow_plugin_xp']->value)){?>
                    <div class="ow_right ow_small ow_remark"><?php echo $_smarty_tpl->tpl_vars['softVersion']->value;?>
</div>
                <?php }?>
            </div>
            <div class="ow_powered_by">
                <?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

            </div>
        </div>
    </div>
</div>
<!-- end of footer wrapper -->

<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    // process main menu height
    var $mainLeftMenu = $("#main_left_menu > .ow_admin_menu");
    if ( $mainLeftMenu.innerHeight() > $(window).innerHeight() ) {
        $mainLeftMenu.parent().removeClass("sticky");
    }

    $(document).ready(function(){
        // console
        var $tooltip = $("#console-notifications-wrapper .ow_tooltip");
        var $consoleLink = $("#admin_console_update_link");

        $consoleLink.on("click", function(e) 
        {
            e.preventDefault();

            // show the notifications
            if (!$tooltip.hasClass("active")) {
                $tooltip.addClass("active").show();
                OW.addScroll("#console-notifications-wrapper .ow_console_list_wrapper");

                return;
            }

            // hide the notifications
            $tooltip.removeClass("active").hide();
            OW.removeScroll("#console-notifications-wrapper .ow_console_list_wrapper");
        });

        $(document).mouseup(function(e)
        {
            if ($(e.target).parents("#console-notifications-wrapper").length 
                    || $consoleLink.is(e.target)) {

                return;
            }

            if ($tooltip.is(":visible")) {
                $tooltip.removeClass("active").hide();
                OW.removeScroll("#console-notifications-wrapper .ow_console_list_wrapper");
            }
        });
    });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>