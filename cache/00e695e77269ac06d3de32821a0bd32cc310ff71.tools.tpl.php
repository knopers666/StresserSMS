<?php /*%%SmartyHeaderCode:569111863537e6cbc0b5d19-21327873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e695e77269ac06d3de32821a0bd32cc310ff71' => 
    array (
      0 => './templates/tools.tpl',
      1 => 1401143336,
      2 => 'file',
    ),
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1401142630,
      2 => 'file',
    ),
    '3d56dd326b5663c85c7a40b9097760a803e56dda' => 
    array (
      0 => './configs/config.conf',
      1 => 1401143393,
      2 => 'file',
    ),
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1401144042,
      2 => 'file',
    ),
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1401143627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '569111863537e6cbc0b5d19-21327873',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c3c65d6458_94283889',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c3c65d6458_94283889')) {function content_5383c3c65d6458_94283889($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pl">
  <head>
	<!-- Meta Tagi -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jedyna taka strona w Polsce, która oferuje DDoS za SMS">
	<meta name="keywords" content="ddos,DDOS,sms,polski stresser,stresser,pl,test ddos">
	<meta name="author" content="knopers">
	<title>STRESSER|GO2DDOS</title>

    <!-- Style -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link href="http://go2ddos.pl/assets/css/main.css" rel="stylesheet">
	<link href="http://go2ddos.pl/assets/img/favicon.ico" rel="icon" type="image/x-icon" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
            <a class="navbar-brand" href="#">GO2DDOS</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
			  <li><a href="/status">Tests status</a></li>
			  <li><a href="/tools">Tools</a></li>
              <li><a href="/contact">Contact</a></li>
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
</header>
<main class="container">
	<div id="alert_placeholder"></div>
	<section id="tools">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Skype Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputSkype" class="col-sm-6 control-label">Username:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="inputSkype" placeholder="user123">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="skype" data-loading-text="Checking...">Resolve</button>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Domain Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputDomain" class="col-sm-4 control-label">Domain:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputDomain" placeholder="example.com">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="domain" data-loading-text="Checking...">Resolve</button>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Is down?</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputDown" class="col-sm-4 control-label">Site:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputDown" placeholder="http://example.com/">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="isdown" data-loading-text="Checking...">Check</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
 
	<footer class="container">
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
					<p class="muted pull-right">© 2014 GO2DDOS. All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- Javascripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://go2ddos.pl/assets/js/jquery.cookie.js"></script>
				<script src="http://go2ddos.pl/assets/js/custom.js"></script>
		<script src="http://go2ddos.pl/assets/js/custom_tools.js"></script>
		<script type="text/javascript">
		skryptcookiesPozycja = "bottom";
	</script>
	<script src="http://skryptcookies.pl/cookie.js"></script>
</body>
</html>
<?php }} ?>
