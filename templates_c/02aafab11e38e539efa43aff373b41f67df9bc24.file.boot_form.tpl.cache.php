<?php /* Smarty version Smarty-3.1.18, created on 2014-05-26 19:22:25
         compiled from "./templates/boot_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043498233537b881f210875-85453691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02aafab11e38e539efa43aff373b41f67df9bc24' => 
    array (
      0 => './templates/boot_form.tpl',
      1 => 1401124942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043498233537b881f210875-85453691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537b881f2202f6_77544377',
  'variables' => 
  array (
    'methods' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b881f2202f6_77544377')) {function content_537b881f2202f6_77544377($_smarty_tpl) {?><form class="form-horizontal" role="form" id="boot-form">
	<div class="form-group">
		<label for="inputIP" class="col-sm-2 control-label"><?php echo $_smarty_tpl->getConfigVariable('ip_adress');?>
</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputIP" name="AdresIP" placeholder="127.0.0.1:80">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"><?php echo $_smarty_tpl->getConfigVariable('time');?>
</label>
			<div class="col-sm-10">
				<p class="form-control-static">6 minut</p>
			</div>
	</div>
	<div class="form-group">
		<label for="inputMethod" class="col-sm-2 control-label"><?php echo $_smarty_tpl->getConfigVariable('method');?>
</label>
		<div class="col-sm-10">
			<select class="form-control" id="inputMethod" name="Method">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="inputSMS" class="col-sm-2 control-label"><?php echo $_smarty_tpl->getConfigVariable('sms_code');?>
</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputSMS" name="SMS" placeholder="Wyślij sms o treści HPAY.DDOS na numer 76660 (Koszt 7,38zł brutto)">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="tos"><?php echo $_smarty_tpl->getConfigVariable('accept');?>
 <a href="#" id="tos" data-toggle="modal" data-target="#tosModal"><?php echo $_smarty_tpl->getConfigVariable('tos');?>
</a>
				</label>
			</div>
		</div>
	</div>
	<hr>
	<button type="button" class="btn btn-success btn-lg btn-block" data-loading-text="<?php echo $_smarty_tpl->getConfigVariable('sending');?>
" id="send"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
</form><?php }} ?>
