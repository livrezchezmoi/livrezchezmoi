<?php /*%%SmartyHeaderCode:179093269157f4ad024d46e2-73163259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3237261fd4f8ea3da6ccbb5b45097d2561c1f540' => 
    array (
      0 => '/home/oss/livrezchezmoi/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1475568504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179093269157f4ad024d46e2-73163259',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f5fe37417e35_56649046',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f5fe37417e35_56649046')) {function content_57f5fe37417e35_56649046($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//livrezchezmoi.prodtest.ovh/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
