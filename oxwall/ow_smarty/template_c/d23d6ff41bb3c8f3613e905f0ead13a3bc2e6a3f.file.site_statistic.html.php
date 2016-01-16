<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:11:55
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\base\views\components\site_statistic.html" */ ?>
<?php /*%%SmartyHeaderCode:23254566e256b2cc536-25397781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23d6ff41bb3c8f3613e905f0ead13a3bc2e6a3f' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\base\\views\\components\\site_statistic.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23254566e256b2cc536-25397781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chartId' => 0,
    'categories' => 0,
    'data' => 0,
    'total' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e256b2ef070_22132089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e256b2ef070_22132089')) {function content_566e256b2ef070_22132089($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .statistic_amount {
        margin-top:10px;
    }

    .statistic_amount h3 {
        margin-bottom: 10px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    var ctx = $("#<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
").get(0).getContext("2d");
    ctx.canvas.height = 100;

    var data = {
        labels: <?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
,
        datasets: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    };

    
        var lineChart = new Chart(ctx).Line(data, {
            animation: false,
            responsive : true,
            tooltipTemplate: "<<?php ?>%= datasetLabel %<?php ?>> - <<?php ?>%= value %<?php ?>>",
            multiTooltipTemplate: "<<?php ?>%= datasetLabel %<?php ?>> - <<?php ?>%= value %<?php ?>>"
        });
    

    if ( typeof OW.WidgetPanel != "undefined" )
    {
        // Rebuild the chart
        OW.WidgetPanel.bind("move", function(e)
        {
            var canvasId = $(e.widget).find("canvas").attr("id");

            if (canvasId == "<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
")
            {
                lineChart.destroy();
                lineChart = new Chart(ctx).Line(data, {
                    animation: false,
                    responsive : true,
                    tooltipTemplate: "<<?php ?>%= datasetLabel %<?php ?>> - <<?php ?>%= value %<?php ?>>",
                    multiTooltipTemplate: "<<?php ?>%= datasetLabel %<?php ?>> - <<?php ?>%= value %<?php ?>>"
                });
            }
        });
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="statistic_chart_wrapper">
    <canvas id="<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
"></canvas>
</div>
<div class="statistic_amount">
    <h3><?php echo smarty_function_text(array('key'=>'admin+statistics_amount_for_period'),$_smarty_tpl);?>
 :</h3>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['total']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['info']->value['label'];?>
: <b><?php echo $_smarty_tpl->tpl_vars['info']->value['count'];?>
</b>
        </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>