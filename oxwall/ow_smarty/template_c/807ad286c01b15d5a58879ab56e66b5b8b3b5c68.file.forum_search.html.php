<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:12:28
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_plugins\forum\views\components\forum_search.html" */ ?>
<?php /*%%SmartyHeaderCode:20588566e258c5902b3-70799168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '807ad286c01b15d5a58879ab56e66b5b8b3b5c68' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_plugins\\forum\\views\\components\\forum_search.html',
      1 => 1441713646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20588566e258c5902b3-70799168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themeUrl' => 0,
    'userToken' => 0,
    'input' => 0,
    'filterContext' => 0,
    'userInput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e258c5cfd38_48806656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e258c5cfd38_48806656')) {function content_566e258c5cfd38_48806656($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .forum_search_form { display: inline-block; }
    .forum_search_tag_input {
        border-width: 1px;
        border-top: none; border-bottom: none; border-right: none;
        width: 110px;
        padding: 4px;
    }
    .forum_search_wrap {
        display: inline-block;
        background-image: url(<?php echo $_smarty_tpl->tpl_vars['themeUrl']->value;?>
inputbg.gif);
        background-repeat: repeat-x;
        background-position: 0px 0px;
        font-size: 0px;
        line-height: 28px;
        margin: 0px 0px 20px 0px;
        padding: 0px 24px 0px 0px;
        border-radius: 3px;
        border-width: 1px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        position: relative;
        vertical-align: top;
    }
    body .forum_search_wrap input {
        border: none;
        background-image: none;
        padding: 0px 0px 3px;
        height: 20px;
    }
    .forum_search_input { padding: 4px; width: 130px; }
    .forum_search_inputs .forum_search_input { float: left; }
    .forum_search_inputs .forum_search_tag_input { float: right; }
    .ow_forum_search_context_menu {
        display: none;
        position: absolute;
        right: 4px;
        top: 4px;
    }
    .ow_context_more.ow_miniic_delete { background-position: -1px center; }
    .ow_context_action:hover .ow_context_more.ow_miniic_delete {
        background-image: url(<?php echo $_smarty_tpl->tpl_vars['themeUrl']->value;?>
/miniic_x.png);
        background-position: -1px center;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form id="forum_search" class="forum_search_form">
    <div class="forum_search_wrap ow_border">
        <div id="forum_search_cont" class="clearfix<?php if ($_smarty_tpl->tpl_vars['userToken']->value){?> forum_search_inputs<?php }?>">
            <div class="forum_search_input"><?php echo $_smarty_tpl->tpl_vars['input']->value;?>
</div>
            <div class="ow_forum_search_context_menu" style="display: block;">
                <div class="add_filter"<?php if ($_smarty_tpl->tpl_vars['userToken']->value){?> style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filterContext']->value;?>
</div>
            </div>
            <div class="forum_search_tag_input ow_border"<?php if (!$_smarty_tpl->tpl_vars['userToken']->value){?> style="visibility: hidden; height: 0px; padding: 0px;"<?php }?>>
                <div class="ow_forum_search_context_menu" style="display: block;">
                    <div class="ow_context_action_block clearfix">
                        <div class="ow_context_action">
                            <span class="ow_context_more ow_miniic_delete"></span>
                        </div>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>

                <input type="submit" name="search_submit" style="visibility: hidden; position: absolute; top: -1000px;" />
            </div>
        </div>
    </div>
</form><?php }} ?>