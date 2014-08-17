<?php /*%%SmartyHeaderCode:380670740537f7a34d4dfa5-75693734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2f3432e27515bb01dac4f152b818b7d65ffc59' => 
    array (
      0 => './templates/status.tpl',
      1 => 1401143038,
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
  'nocache_hash' => '380670740537f7a34d4dfa5-75693734',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5383c3c051ef03_84977973',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383c3c051ef03_84977973')) {function content_5383c3c051ef03_84977973($_smarty_tpl) {?><!DOCTYPE html>
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
	<section class="box" id="search">
		<div class="row">
			<div class="col-md-12">
				<form class="form-inline" role="form">
					<div class="input-group">
						<input type="text" class="form-control" id="inputID" placeholder="Identifier" value="">
							<div class="input-group-btn">
								<button class="btn btn-success" type="button" id="search_button"><i class="glyphicon glyphicon-search"></i></button>
							</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="box" id="result" style="display: none;">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Target</th>
						<th>Method</th>
						<th>Time</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="id">1</td>
						<td id="ip">127.0.0.1</td>
						<td id="method">UDP</td>
						<td id="time">320 sekund</td>
						<td id="date">2014-05-21 16:00:56</td>
						<td id="status"><span class="label label-success">Wykonano</span></td>
					</tr>
				</tbody>
			</table>
		</div>
		<button type="button" class="btn btn-danger btn-lg btn-block">Stop</button>
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
			<script type="text/javascript" src="http://go2ddos.pl/assets/js/date.js"></script>
				<script src="http://go2ddos.pl/assets/js/custom.js"></script>
		<script src="http://go2ddos.pl/assets/js/custom_status.js"></script>
		<script type="text/javascript">
		skryptcookiesPozycja = "bottom";
	</script>
	<script src="http://skryptcookies.pl/cookie.js"></script>
</body>
</html><?php }} ?>
