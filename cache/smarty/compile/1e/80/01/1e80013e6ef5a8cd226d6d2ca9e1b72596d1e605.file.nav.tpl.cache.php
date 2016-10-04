<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 11:28:23
         compiled from "/home/oss/livrezchezmoi/themes/minimal_16_theme/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59012422257f3763718b351-70363084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e80013e6ef5a8cd226d6d2ca9e1b72596d1e605' => 
    array (
      0 => '/home/oss/livrezchezmoi/themes/minimal_16_theme/modules/blockcontact/nav.tpl',
      1 => 1475573254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59012422257f3763718b351-70363084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f3763719c0a3_27774276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f3763719c0a3_27774276')) {function content_57f3763719c0a3_27774276($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>
