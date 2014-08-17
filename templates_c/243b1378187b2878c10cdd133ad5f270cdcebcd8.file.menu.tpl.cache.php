<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:40:48
         compiled from "./templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12168111775378a1007f3707-92519901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1401144042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12168111775378a1007f3707-92519901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5378a1007f82a9_03939180',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5378a1007f82a9_03939180')) {function content_5378a1007f82a9_03939180($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value)."_menu", 'local'); ?>
<header class="container">
<!-- Menu -->
<div class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->getConfigVariable('title_menu');?>
</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/"><?php echo $_smarty_tpl->getConfigVariable('home');?>
</a></li>
			  <li><a href="/status"><?php echo $_smarty_tpl->getConfigVariable('status');?>
</a></li>
			  <li><a href="/tools"><?php echo $_smarty_tpl->getConfigVariable('tools');?>
</a></li>
              <li><a href="/contact"><?php echo $_smarty_tpl->getConfigVariable('contact');?>
</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-flag"><b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">PL</a></li>
						<li><a href="#">ENG</a></li>
					</ul>
				</li>
			</ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</div>
</header><?php }} ?>
