<?php /* Smarty version Smarty-3.1.12, created on 2015-12-13 18:12:04
         compiled from "C:\Program Files (x86)\Ampps\www\oxwall\ow_system_plugins\admin\views\controllers\finance_index.html" */ ?>
<?php /*%%SmartyHeaderCode:18230566e2574d77925-33029362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875a9f2849ad5b6d076356d16818db0cf0be1768' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_system_plugins\\admin\\views\\controllers\\finance_index.html',
      1 => 1441713644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18230566e2574d77925-33029362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paging' => 0,
    'list' => 0,
    'sale' => 0,
    'userNames' => 0,
    'displayNames' => 0,
    'stats' => 0,
    'cur' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e2574e3ece2_54153298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e2574e3ece2_54153298')) {function content_566e2574e3ece2_54153298($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_user_link')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.user_link.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\Program Files (x86)\\Ampps\\www\\oxwall\\ow_smarty\\plugin\\function.format_date.php';
?>
<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<table class="ow_table_2">
    <tr class="ow_tr_first">
        <th class="ow_nowrap"><?php echo smarty_function_text(array('key'=>'base+billing_transaction_id'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+billing_gateway'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+plugin'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+billing_details'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+billing_amount'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+currency'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+user'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+time'),$_smarty_tpl);?>
</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['sale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sale']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['sale']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['sale']->key => $_smarty_tpl->tpl_vars['sale']->value){
$_smarty_tpl->tpl_vars['sale']->_loop = true;
 $_smarty_tpl->tpl_vars['sale']->iteration++;
 $_smarty_tpl->tpl_vars['sale']->last = $_smarty_tpl->tpl_vars['sale']->iteration === $_smarty_tpl->tpl_vars['sale']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sale']['last'] = $_smarty_tpl->tpl_vars['sale']->last;
?>
    <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sale']['last']){?>ow_tr_last<?php }?>">
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['transactionUid'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['sale']->value['gatewayKey']!=''){?>
                <?php echo smarty_function_text(array('key'=>((string)$_smarty_tpl->tpl_vars['sale']->value['gatewayKey'])."+gateway_title"),$_smarty_tpl);?>

            <?php }else{ ?>
                <span class="ow_small ow_remark"><?php echo smarty_function_text(array('key'=>'base+billing_gateway_unavailable'),$_smarty_tpl);?>
</span>
            <?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['pluginTitle'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['entityDescription'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['totalAmount'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['currency'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['sale']->value['userId']!=null){?>
                <?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['userNames']->value[$_smarty_tpl->tpl_vars['sale']->value['userId']],'name'=>$_smarty_tpl->tpl_vars['displayNames']->value[$_smarty_tpl->tpl_vars['sale']->value['userId']]),$_smarty_tpl);?>

            <?php }else{ ?>
                <span class="ow_small ow_remark">-</span>
            <?php }?>
        </td>
        <td class="ow_small"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['sale']->value['timeStamp']),$_smarty_tpl);?>
</td>
    </tr>
    <?php } ?>
</table>

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<div class="ow_supernarrow ow_automargin">
<table class="ow_table_3">
<tr class="ow_tr_first"><th class="ow_label" style="text-align: center" colspan="2"><b><?php echo smarty_function_text(array('key'=>'base+billing_statistics'),$_smarty_tpl);?>
</b></th></tr>
<?php  $_smarty_tpl->tpl_vars['sum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sum']->_loop = false;
 $_smarty_tpl->tpl_vars['cur'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sum']->key => $_smarty_tpl->tpl_vars['sum']->value){
$_smarty_tpl->tpl_vars['sum']->_loop = true;
 $_smarty_tpl->tpl_vars['cur']->value = $_smarty_tpl->tpl_vars['sum']->key;
?>
    <tr>
        <td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['cur']->value;?>
</td>
        <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</td>
    </tr>
<?php } ?>
</table>
</div><?php }} ?>