<?php /* Smarty version Smarty-3.1.19, created on 2016-10-05 11:30:47
         compiled from "/home/oss/livrezchezmoi/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162777889657f4c847d1b985-81460499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385ab9952e4b4791b89fb7063fed724d5f432b91' => 
    array (
      0 => '/home/oss/livrezchezmoi/pdf/invoice.shipping-tab.tpl',
      1 => 1475568504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162777889657f4c847d1b985-81460499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f4c847d20415_22102719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4c847d20415_22102719')) {function content_57f4c847d20415_22102719($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
