<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:17:12
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214539335753789b10c22d31-96342894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1401142558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214539335753789b10c22d31-96342894',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53789b10c3ce16_80550446',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53789b10c3ce16_80550446')) {function content_53789b10c3ce16_80550446($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value)."_index", 'local'); ?>
<main class="container">
	<?php echo $_smarty_tpl->getSubTemplate ("noscript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span><strong>Prosimy nie wysłać SMS-ów, ponieważ usługa jest dopiero w przygotowaniu.</strong></span>
	</div>
	<section id="alert_placeholder"></section>
	<section id="boot-form" class="row">
		<div class="col-md-12">
			<div class="box">
				<?php echo $_smarty_tpl->getSubTemplate ("boot_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			</div>
		</div>
	</section>
	<section id="status" class="row">
		<div class="col-md-12">
			<div class="box">
				<h1><p class="text-center"><?php echo $_smarty_tpl->getConfigVariable('status');?>
</p></h1>
				<h1><p id="response" class="text-center"><img src="assets/img/ajax-loader.gif" id="loading-indicator" /></p></h1>
			</div>
		</div>
	</section>
</main>
<?php if (isset($_smarty_tpl->tpl_vars['path'])) {$_smarty_tpl->tpl_vars['path'] = clone $_smarty_tpl->tpl_vars['path'];
$_smarty_tpl->tpl_vars['path']->value = 'index'; $_smarty_tpl->tpl_vars['path']->nocache = null; $_smarty_tpl->tpl_vars['path']->scope = 0;
} else $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('index', null, 0);?>  
<?php echo $_smarty_tpl->getSubTemplate ("tos_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
