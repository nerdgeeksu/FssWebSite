<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:11:55
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\admin\views\components\finance_statistic_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:5188566e256b331e98-78378132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462c42c68ecbdd45c83fccae3e41026fcd8ee826' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\admin\\views\\components\\finance_statistic_widget.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5188566e256b331e98-78378132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultPeriod' => 0,
    'menu' => 0,
    'statistics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e256b35a7c5_50481643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e256b35a7c5_50481643')) {function content_566e256b35a7c5_50481643($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    #admin-finance-statistics-header #finance-statistics-menu {
        float:right;
    }

    #admin-finance-statistics-container .ow_ajaxloader_preloader {
        min-height:300px;
    }

    #admin-finance-history {
        float:right;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    var defaultPeriod = "<?php echo $_smarty_tpl->tpl_vars['defaultPeriod']->value;?>
";

    $("#finance-statistics-menu a").on("click", function(){
        defaultPeriod = $(this).attr("id");
        defaultPeriod = defaultPeriod.replace("finance_menu_statistics_", "");

        reloadChart();
    });

    /**
     * Reload chart
     *
     * @return void
     */
    function reloadChart()
    {
        if (!defaultPeriod)
        {
            return;
        }

        OW.loadComponent("ADMIN_CMP_FinanceStatistic", [{ "defaultPeriod" : defaultPeriod }], "#admin-finance-statistics-container");
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="admin-finance-statistics-header">
    <div id="finance-statistics-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>
    <div class="clearfix"></div>
</div>

<div id="admin-finance-statistics-container">
    <?php echo $_smarty_tpl->tpl_vars['statistics']->value;?>

</div>

<div id="admin-finance-history">
    <?php ob_start();?><?php echo smarty_function_url_for_route(array('for'=>'admin_finance'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_decorator(array('name'=>"button_list_item",'langLabel'=>"admin+statistics_history",'onclick'=>"location.href='".$_tmp1."'"),$_smarty_tpl);?>

</div>
<div class="clearfix"></div>
<?php }} ?>