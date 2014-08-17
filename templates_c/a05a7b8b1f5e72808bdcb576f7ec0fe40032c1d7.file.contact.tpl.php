<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 15:54:24
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2405911455383c46f8d8a66-63280131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1402148442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2405911455383c46f8d8a66-63280131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c46f8fd1a8_16844870',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c46f8fd1a8_16844870')) {function content_5383c46f8fd1a8_16844870($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_contact", 'local'); ?>
<main class="container">
	<section id="contact" class="row">
		<div class="col-md-12">
			<div class="box">
				<legend><?php echo $_smarty_tpl->getConfigVariable('contact');?>
</legend>
				<address>
					<strong>Email:</strong> <?php echo $_smarty_tpl->getConfigVariable('email');?>

				</adress>
			</div>
		</div>
	</section>
</main>
<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
