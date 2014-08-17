<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 15:54:23
         compiled from "./templates/tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20276673645383c46eeeb611-90619791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e695e77269ac06d3de32821a0bd32cc310ff71' => 
    array (
      0 => './templates/tools.tpl',
      1 => 1402149200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20276673645383c46eeeb611-90619791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c46ef22cd0_70363075',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c46ef22cd0_70363075')) {function content_5383c46ef22cd0_70363075($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_tools", 'local'); ?>
<main class="container">
	<div id="alert_placeholder"></div>
	<section id="tools">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Skype Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputSkype" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getConfigVariable('username');?>
</label>
							<div class="col-sm-9">
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
							<label for="inputDomain" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getConfigVariable('domain');?>
</label>
							<div class="col-sm-9">
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
							<label for="inputDown" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getConfigVariable('site');?>
</label>
							<div class="col-sm-9">
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
<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('tools', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
