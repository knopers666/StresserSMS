<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 15:53:32
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6799779015383c3dbf09644-28993088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1402148476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6799779015383c3dbf09644-28993088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c3dbf1b565_82400745',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c3dbf1b565_82400745')) {function content_5383c3dbf1b565_82400745($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("head", 'local'); ?>
<!DOCTYPE html>
<html lang="pl">
  <head>
	<!-- Meta Tagi -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $_smarty_tpl->getConfigVariable('desc');?>
">
	<meta name="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('keywords');?>
">
	<meta name="author" content="knopers">
	<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>

    <!-- Style -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/css/main.css" rel="stylesheet">
	<link href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/img/favicon.ico" rel="icon" type="image/x-icon" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body><?php }} ?>
