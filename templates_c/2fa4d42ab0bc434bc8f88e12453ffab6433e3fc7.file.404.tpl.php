<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 15:53:32
         compiled from "./templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18894163015383c3dc338716-60595313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa4d42ab0bc434bc8f88e12453ffab6433e3fc7' => 
    array (
      0 => './templates/404.tpl',
      1 => 1402148401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18894163015383c3dc338716-60595313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c3dc357184_60070473',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c3dc357184_60070473')) {function content_5383c3dc357184_60070473($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_404", 'local'); ?>
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
<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
