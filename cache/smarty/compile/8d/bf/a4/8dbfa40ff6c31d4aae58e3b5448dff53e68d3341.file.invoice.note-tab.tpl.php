<?php /* Smarty version Smarty-3.1.19, created on 2016-10-05 11:30:47
         compiled from "/home/oss/livrezchezmoi/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165925306657f4c847ccf9f1-02575542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbfa40ff6c31d4aae58e3b5448dff53e68d3341' => 
    array (
      0 => '/home/oss/livrezchezmoi/pdf/invoice.note-tab.tpl',
      1 => 1475568504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165925306657f4c847ccf9f1-02575542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f4c847cda207_13268298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4c847cda207_13268298')) {function content_57f4c847cda207_13268298($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
