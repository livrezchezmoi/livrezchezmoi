<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 11:28:32
         compiled from "/home/oss/livrezchezmoi/themes/minimal_16_theme/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144020425757f37640d6b0b3-97217945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e0713c2d109797e2da628c250546c142927863' => 
    array (
      0 => '/home/oss/livrezchezmoi/themes/minimal_16_theme/modules/homefeatured/tab.tpl',
      1 => 1475573254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144020425757f37640d6b0b3-97217945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f37640d72912_99164995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f37640d72912_99164995')) {function content_57f37640d72912_99164995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/oss/livrezchezmoi/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
