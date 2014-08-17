<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 00:44:44
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19196696185383c3dc019992-37679098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1401143627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19196696185383c3dc019992-37679098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c3dc04a121_65024904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c3dc04a121_65024904')) {function content_5383c3dc04a121_65024904($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/stresser/libs/plugins/modifier.date_format.php';
?>	<footer class="container">
		<hr>
		<div class="row">
			<div class="col-lg-12">
				<div class="col-md-8">
					<ul class="footer-links">
						<li><a href="#">Regulamin</a></li>
						<li><a href="https://ssl.homepay.pl/reklamacje/">Reklamacje SMS Premium</a></li>
						<li><a href='https://ssl.homepay.pl/stawki-prowizji/' target='_blank' title='płatności internetowe, płatności sms premium'><img src='https://ssl.homepay.pl/files/img/logo_na_tle.png' style='border:0' alt='Logo Homepay' title='Logo Homepay' width='130' height='35' /></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<p class="muted pull-right">© <?php echo smarty_modifier_date_format(time(),"%Y");?>
 GO2DDOS. All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- Javascripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/jquery.cookie.js"></script>
	<?php if ($_smarty_tpl->tpl_vars['path']->value=='index') {?>
		<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/css/bootstrapValidator.min.css"/>
		<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/bootstrapValidator.js"></script>
		<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/validator/notEmpty.js"></script>
	<?php } elseif ($_smarty_tpl->tpl_vars['path']->value=='status') {?>
		<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/date.js"></script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['path']->value!='') {?>
		<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/custom.js"></script>
		<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/custom_<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
.js"></script>
	<?php }?>
	<script type="text/javascript">
		skryptcookiesPozycja = "bottom";
	</script>
	<script src="http://skryptcookies.pl/cookie.js"></script>
</body>
</html><?php }} ?>
