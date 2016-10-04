<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 15:37:42
         compiled from "/home/oss/livrezchezmoi/admin3069qkw5w/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86084396857f3b0a6dc5d86-91076820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd60a266bbc99187785c5ad116b7c10aa6ffd3588' => 
    array (
      0 => '/home/oss/livrezchezmoi/admin3069qkw5w/themes/default/template/controllers/stats/stats.tpl',
      1 => 1475568503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86084396857f3b0a6dc5d86-91076820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f3b0a6dd2835_39041147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f3b0a6dd2835_39041147')) {function content_57f3b0a6dd2835_39041147($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
