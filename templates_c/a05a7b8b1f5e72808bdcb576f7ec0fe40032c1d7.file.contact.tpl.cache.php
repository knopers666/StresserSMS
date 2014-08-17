<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:27:06
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102542660553813397432810-44507026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1401143225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102542660553813397432810-44507026',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53813397447a52_10519074',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53813397447a52_10519074')) {function content_53813397447a52_10519074($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value)."_contact", 'local'); ?>
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
<?php if (isset($_smarty_tpl->tpl_vars['path'])) {$_smarty_tpl->tpl_vars['path'] = clone $_smarty_tpl->tpl_vars['path'];
$_smarty_tpl->tpl_vars['path']->value = ''; $_smarty_tpl->tpl_vars['path']->nocache = null; $_smarty_tpl->tpl_vars['path']->scope = 0;
} else $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
