<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:26:22
         compiled from "./templates/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:380670740537f7a34d4dfa5-75693734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2f3432e27515bb01dac4f152b818b7d65ffc59' => 
    array (
      0 => './templates/status.tpl',
      1 => 1401143038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '380670740537f7a34d4dfa5-75693734',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537f7a34d6ac38_84085728',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f7a34d6ac38_84085728')) {function content_537f7a34d6ac38_84085728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value)."_status", 'local'); ?>
<main class="container">
	<div id="alert_placeholder"></div>
	<section class="box" id="search">
		<div class="row">
			<div class="col-md-12">
				<form class="form-inline" role="form">
					<div class="input-group">
						<input type="text" class="form-control" id="inputID" placeholder="<?php echo $_smarty_tpl->getConfigVariable('identifier');?>
" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 echo (isset($_COOKIE['id']) ? $_COOKIE['id'] : '');<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
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
<?php if (isset($_smarty_tpl->tpl_vars['path'])) {$_smarty_tpl->tpl_vars['path'] = clone $_smarty_tpl->tpl_vars['path'];
$_smarty_tpl->tpl_vars['path']->value = 'status'; $_smarty_tpl->tpl_vars['path']->nocache = null; $_smarty_tpl->tpl_vars['path']->scope = 0;
} else $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('status', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
