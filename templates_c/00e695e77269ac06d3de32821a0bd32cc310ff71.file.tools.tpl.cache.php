<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:29:53
         compiled from "./templates/tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:569111863537e6cbc0b5d19-21327873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e695e77269ac06d3de32821a0bd32cc310ff71' => 
    array (
      0 => './templates/tools.tpl',
      1 => 1401143336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '569111863537e6cbc0b5d19-21327873',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537e6cbc0c5e05_06986386',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537e6cbc0c5e05_06986386')) {function content_537e6cbc0c5e05_06986386($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value)."_tools", 'local'); ?>
<main class="container">
	<div id="alert_placeholder"></div>
	<section id="tools">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Skype Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputSkype" class="col-sm-6 control-label"><?php echo $_smarty_tpl->getConfigVariable('username');?>
</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="inputSkype" placeholder="user123">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="skype" data-loading-text="<?php echo $_smarty_tpl->getConfigVariable('checking');?>
">Resolve</button>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Domain Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputDomain" class="col-sm-4 control-label"><?php echo $_smarty_tpl->getConfigVariable('domain');?>
</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputDomain" placeholder="example.com">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="domain" data-loading-text="<?php echo $_smarty_tpl->getConfigVariable('checking');?>
">Resolve</button>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Is down?</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputDown" class="col-sm-4 control-label"><?php echo $_smarty_tpl->getConfigVariable('site');?>
</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputDown" placeholder="http://example.com/">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="isdown" data-loading-text="<?php echo $_smarty_tpl->getConfigVariable('checking');?>
"><?php echo $_smarty_tpl->getConfigVariable('check');?>
</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php if (isset($_smarty_tpl->tpl_vars['path'])) {$_smarty_tpl->tpl_vars['path'] = clone $_smarty_tpl->tpl_vars['path'];
$_smarty_tpl->tpl_vars['path']->value = 'tools'; $_smarty_tpl->tpl_vars['path']->nocache = null; $_smarty_tpl->tpl_vars['path']->scope = 0;
} else $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('tools', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
