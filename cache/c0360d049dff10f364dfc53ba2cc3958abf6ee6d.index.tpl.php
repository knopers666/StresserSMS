<?php /*%%SmartyHeaderCode:214539335753789b10c22d31-96342894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1401142558,
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
    'ff411bebe30a51b247d37cca104cc9af0437dac3' => 
    array (
      0 => './templates/noscript.tpl',
      1 => 1400441955,
      2 => 'file',
    ),
    '02aafab11e38e539efa43aff373b41f67df9bc24' => 
    array (
      0 => './templates/boot_form.tpl',
      1 => 1401124942,
      2 => 'file',
    ),
    '924e6fabc63664eac6fb004abd113fba88895f0f' => 
    array (
      0 => './templates/tos_modal.tpl',
      1 => 1401125724,
      2 => 'file',
    ),
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1401143627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214539335753789b10c22d31-96342894',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c397e87f75_55957784',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c397e87f75_55957784')) {function content_5383c397e87f75_55957784($_smarty_tpl) {?><!DOCTYPE html>
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
              <li><a href="/">Strona Główna</a></li>
			  <li><a href="/status">Status testów</a></li>
			  <li><a href="/tools">Narzędzia</a></li>
              <li><a href="/contact">Kontakt</a></li>
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
	<noscript>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<span><strong>Uwaga: </strong> JavaScript nie jest włączone. <a href="http://enable-javascript.com/" class="alert-link">Proszę o aktywowanie obsługi JavaScript</a>.</span>
</div>
</noscript>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span><strong>Prosimy nie wysłać SMS-ów, ponieważ usługa jest dopiero w przygotowaniu.</strong></span>
	</div>
	<section id="alert_placeholder"></section>
	<section id="boot-form" class="row">
		<div class="col-md-12">
			<div class="box">
				<form class="form-horizontal" role="form" id="boot-form">
	<div class="form-group">
		<label for="inputIP" class="col-sm-2 control-label">Adres IP:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputIP" name="AdresIP" placeholder="127.0.0.1:80">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Czas:</label>
			<div class="col-sm-10">
				<p class="form-control-static">6 minut</p>
			</div>
	</div>
	<div class="form-group">
		<label for="inputMethod" class="col-sm-2 control-label">Typ ataku:</label>
		<div class="col-sm-10">
			<select class="form-control" id="inputMethod" name="Method">
									<option value="CHARGEN">CHARGEN</option>
									<option value="UDP">UDP</option>
									<option value="UDPLAG">UDPLAG</option>
									<option value="XSYN">XSYN</option>
									<option value="SLOWORIS">SLOWORIS</option>
							</select>
		</div>
	</div>
	<div class="form-group">
		<label for="inputSMS" class="col-sm-2 control-label">Kod SMS:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputSMS" name="SMS" placeholder="Wyślij sms o treści HPAY.DDOS na numer 76660 (Koszt 7,38zł brutto)">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="tos">Akceptuje <a href="#" id="tos" data-toggle="modal" data-target="#tosModal">Regulamin</a>
				</label>
			</div>
		</div>
	</div>
	<hr>
	<button type="button" class="btn btn-success btn-lg btn-block" data-loading-text="Wysyłanie..." id="send">Wyślij!</button>
</form>
			</div>
		</div>
	</section>
	<section id="status" class="row">
		<div class="col-md-12">
			<div class="box">
				<h1><p class="text-center">Aktualny status serwerów:</p></h1>
				<h1><p id="response" class="text-center"><img src="assets/img/ajax-loader.gif" id="loading-indicator" /></p></h1>
			</div>
		</div>
	</section>
</main>
  
<div class="modal fade" id="tosModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Regulamin</h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
			<link rel="stylesheet" href="http://go2ddos.pl/css/bootstrapValidator.min.css"/>
		<script type="text/javascript" src="http://go2ddos.pl/assets/js/bootstrapValidator.js"></script>
		<script type="text/javascript" src="http://go2ddos.pl/assets/js/validator/notEmpty.js"></script>
				<script src="http://go2ddos.pl/assets/js/custom.js"></script>
		<script src="http://go2ddos.pl/assets/js/custom_index.js"></script>
		<script type="text/javascript">
		skryptcookiesPozycja = "bottom";
	</script>
	<script src="http://skryptcookies.pl/cookie.js"></script>
</body>
</html>
<?php }} ?>
