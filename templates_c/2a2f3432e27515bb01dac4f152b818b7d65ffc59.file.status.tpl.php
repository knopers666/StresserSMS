<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 15:54:22
         compiled from "./templates/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14809937745383c46e286188-88498525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2f3432e27515bb01dac4f152b818b7d65ffc59' => 
    array (
      0 => './templates/status.tpl',
      1 => 1402149256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14809937745383c46e286188-88498525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c46e2c8418_70673115',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c46e2c8418_70673115')) {function content_5383c46e2c8418_70673115($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_status", 'local'); ?>
<main class="container">
	<div id="alert_placeholder"></div>
	<section class="box" id="search">
		<div class="row">
			<div class="col-md-12">
				<form class="form-inline" role="form">
					<div class="input-group">
						<input type="text" class="form-control" id="inputID" placeholder="<?php echo $_smarty_tpl->getConfigVariable('identifier');?>
" value="">
							<div class="input-group-btn">
								<button class="btn btn-success" type="button" id="search_button"><i class="glyphicon glyphicon-search"></i></button>
							</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="box" id="result" style="display: none;">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th><?php echo $_smarty_tpl->getConfigVariable('id');?>
</th>
						<th><?php echo $_smarty_tpl->getConfigVariable('target');?>
</th>
						<th><?php echo $_smarty_tpl->getConfigVariable('method');?>
</th>
						<th><?php echo $_smarty_tpl->getConfigVariable('time');?>
</th>
						<th><?php echo $_smarty_tpl->getConfigVariable('date');?>
</th>
						<th><?php echo $_smarty_tpl->getConfigVariable('status');?>
</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="id">1</td>
						<td id="ip">127.0.0.1</td>
						<td id="method">UDP</td>
						<td id="time">320 sekund</td>
						<td id="date">2014-05-21 16:00:56</td>
						<td id="status"><span class="label label-success">Wykonano</span></td>
					</tr>
				</tbody>
			</table>
		</div>
		<button type="button" class="btn btn-danger btn-lg btn-block">Stop</button>
	</section>
</main>
<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('status', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
