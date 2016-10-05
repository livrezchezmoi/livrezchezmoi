<?php /* Smarty version Smarty-3.1.19, created on 2016-10-05 15:13:15
         compiled from "/home/oss/livrezchezmoi/admin3069qkw5w/themes/default/template/controllers/translations/helpers/view/translation_mails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21608865357f4fc6b570bb3-73376422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d3aa63378ec088355170424520ec2789407e69' => 
    array (
      0 => '/home/oss/livrezchezmoi/admin3069qkw5w/themes/default/template/controllers/translations/helpers/view/translation_mails.tpl',
      1 => 1475568503,
      2 => 'file',
    ),
    'f4e24d7cfc1064a9dcb5fa615dcd151344af0acd' => 
    array (
      0 => '/home/oss/livrezchezmoi/admin3069qkw5w/themes/default/template/helpers/view/view.tpl',
      1 => 1475568503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21608865357f4fc6b570bb3-73376422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f4fc6b67abe9_03893392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4fc6b67abe9_03893392')) {function content_57f4fc6b67abe9_03893392($_smarty_tpl) {?>

<div class="leadin"></div>



	<?php echo $_smarty_tpl->tpl_vars['tinyMCE']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['mod_security_warning']->value) {?>
	<div class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'Apache mod_security is activated on your server. This could result in some Bad Request errors'),$_smarty_tpl);?>

	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
		<div class="alert alert-warning">
			<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type']=='suhosin') {?>
				<?php echo smartyTranslate(array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>


				<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl);?>
<br/>
				<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the Suhosin limit to'),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smartyTranslate(array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>
<br/>
				<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for max_input_vars.'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase this limit to'),$_smarty_tpl);?>

			<?php }?>
			<?php echo smartyTranslate(array('s'=>'%s at least, or you will have to edit the translation files.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl);?>

		</div>
	<?php } else { ?>
		<form method="post" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-horizontal">
			<div class="panel">
				<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				<input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
				<script type="text/javascript">
					$(document).ready(function(){
						$('a.useSpecialSyntax').click(function(){
							var syntax = $(this).find('img').attr('alt');
							$('#BoxUseSpecialSyntax .syntax span').html(syntax+".");
						});
					});
				</script>
				<div id="BoxUseSpecialSyntax">
					<div class="alert alert-warning">
						<p>
							<?php echo smartyTranslate(array('s'=>'Some of these expressions use this special syntax: %s.','sprintf'=>'%d'),$_smarty_tpl);?>

							<br />
							<?php echo smartyTranslate(array('s'=>'You MUST use this syntax in your translations. Here are several examples:'),$_smarty_tpl);?>

						</p>
						<ul>
							<li>"<?php echo smartyTranslate(array('s'=>'There are [1]%d[/1] products','tags'=>array('<strong>')),$_smarty_tpl);?>
": <?php echo smartyTranslate(array('s'=>'"%s" will be replaced by a number.','sprintf'=>'%d'),$_smarty_tpl);?>
</li>
							<li>"<?php echo smartyTranslate(array('s'=>'List of pages in [1]%s[/1]','tags'=>array('<strong>')),$_smarty_tpl);?>
": <?php echo smartyTranslate(array('s'=>'"%s" will be replaced by a string.','sprintf'=>'%s'),$_smarty_tpl);?>
</li>
							<li>"<?php echo smartyTranslate(array('s'=>'Feature: [1]%1$s[/1] ([1]%2$d[/1] values)','tags'=>array('<strong>')),$_smarty_tpl);?>
": <?php echo smartyTranslate(array('s'=>'The numbers enable you to reorder the variables when necessary.'),$_smarty_tpl);?>
</li>
						</ul>
					</div>
				</div>
				<div id="translation_mails-control-actions" class="panel-footer">
					<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['cancel_url']->value;?>
" class="btn btn-default">
						<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

					</a>
					
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right">
						<i class="process-icon-save"></i>
						<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

					</button>
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right">
						<i class="process-icon-save"></i>
						<?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>

					</button>
				</div>
			</div>
			<div class="panel">
				<h3>
					<i class="icon-envelope"></i>
					<?php echo smartyTranslate(array('s'=>'Core emails'),$_smarty_tpl);?>

					<span class="badge">
						<i class="icon-folder"></i>
						mails/<?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value);?>
/
					</span>
				</h3>
				<?php echo $_smarty_tpl->tpl_vars['mail_content']->value;?>

				
				<script type="text/javascript">
				//<![CDATA[
					$(document).ready(function () {
						$('.mails_field').on('shown.bs.collapse', function () {
							// get active email
							var active_email = $(this).find('.email-collapse.in');
							// get iframe container for active email
							var frame = active_email.find('.email-html-frame');
							// get source url for active email
							var src = frame.data('email-src');
							// get rte container for active email
							var rte_mail_selector = active_email.find('textarea.rte-mail').data('rte');
							// create special config
							var rte_mail_config = {};
							rte_mail_config['editor_selector'] = 'rte-mail-' + rte_mail_selector;
							rte_mail_config['height'] = '500px';
							// move controls to active panel
							$('#translation_mails-control-actions').appendTo($(this).find('.panel-collapse.in'));
							// when user first open email
							if (frame.find('iframe.email-frame').length == 0) {
								// load iframe
								frame.append('<iframe class="email-frame" />');
								$.ajax({
									url:'ajax.php',
									type: 'POST',
									async: false,
									dataType: 'html',
									data: {
										getEmailHTML : true,
										email : src
									},
									success: function(result)
									{
										var doc = frame.find('iframe')[0].contentWindow.document;
										doc.open();
										doc.write(result);
										doc.close();
									}
								});

								// init tinyMCE with special config
								tinySetup(rte_mail_config);
							}
						});
					})
				//]]>
				</script>
				
			</div>
			<div class="panel">
				<h3>
					<i class="icon-puzzle-piece"></i>
					<?php echo smartyTranslate(array('s'=>'Module emails'),$_smarty_tpl);?>

					<span class="badge">
						<i class="icon-folder"></i>
						modules/name_of_module/mails/<?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value);?>
/
					</span>
				</h3>
				<?php  $_smarty_tpl->tpl_vars['mails'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mails']->_loop = false;
 $_smarty_tpl->tpl_vars['module_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_mails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mails']->key => $_smarty_tpl->tpl_vars['mails']->value) {
$_smarty_tpl->tpl_vars['mails']->_loop = true;
 $_smarty_tpl->tpl_vars['module_name']->value = $_smarty_tpl->tpl_vars['mails']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['mails']->value['display'];?>

				<?php } ?>
			</div>
		</form>
	<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
