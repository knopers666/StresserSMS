<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:25:22
         compiled from "./templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777607198537e63742d0721-81935172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa4d42ab0bc434bc8f88e12453ffab6433e3fc7' => 
    array (
      0 => './templates/404.tpl',
      1 => 1401143003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777607198537e63742d0721-81935172',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537e63743163d6_35576240',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537e63743163d6_35576240')) {function content_537e63743163d6_35576240($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value)."_404", 'local'); ?>
<main class="container">
	<div class="logo">
	    <h1><?php echo $_smarty_tpl->getConfigVariable('info_404');?>
</h1>
    </div>
	<div class="row text-center">
		<img src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/img/404.jpg" style="max-width: 100%;" alt="404">
	</div>
</main>
<?php if (isset($_smarty_tpl->tpl_vars['path'])) {$_smarty_tpl->tpl_vars['path'] = clone $_smarty_tpl->tpl_vars['path'];
$_smarty_tpl->tpl_vars['path']->value = ''; $_smarty_tpl->tpl_vars['path']->nocache = null; $_smarty_tpl->tpl_vars['path']->scope = 0;
} else $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
