<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:11:55
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\admin\views\components\drag_and_drop_page.html" */ ?>
<?php /*%%SmartyHeaderCode:28401566e256b1a4886-66361276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc9140f7a1c6796c6a53b2e4ce53c6787a35a8be' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\admin\\views\\components\\drag_and_drop_page.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28401566e256b1a4886-66361276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allowCustomize' => 0,
    'componentList' => 0,
    'component' => 0,
    'activeScheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e256b2728b0_20950200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e256b2728b0_20950200')) {function content_566e256b2728b0_20950200($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    #place_components .component {
        float: left;
    }

    .view_component div{
       overflow: hidden;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['allowCustomize']->value){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin customize_box','type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin customize_box','type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ow_center">
            <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_customize_btn','class'=>'ow_ic_gear_wheel','id'=>'goto_customize_btn'),$_smarty_tpl);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin customize_box','type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="ow_stdmargin" id="place_sections">
    <div class="clearfix">
        <div class="place_section top_section">
            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['top'])){?>
                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                <?php } ?>
            <?php }?>
        </div>
        <div class="clearfix" style="overflow: hidden;">
            <div class="ow_left place_section left_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];?>
<?php }?>">
                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['left'])){?>
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?>
            </div>
            <div class="ow_right place_section right_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];?>
<?php }?>" >
                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['right'])){?>
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?>
            </div>
         </div>
        <div class="place_section bottom_section">
            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'])){?>
                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                <?php } ?>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>