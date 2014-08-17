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
					<p class="muted pull-right">© {$smarty.now|date_format:"%Y"} GO2DDOS. All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- Javascripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://{$smarty.server.SERVER_NAME}/assets/js/jquery.cookie.js"></script>
	{if $path eq 'index'}
		<link rel="stylesheet" href="http://{$smarty.server.SERVER_NAME}/css/bootstrapValidator.min.css"/>
		<script type="text/javascript" src="http://{$smarty.server.SERVER_NAME}/assets/js/bootstrapValidator.js"></script>
		<script type="text/javascript" src="http://{$smarty.server.SERVER_NAME}/assets/js/validator/notEmpty.js"></script>
	{else if $path eq 'status'}
		<script type="text/javascript" src="http://{$smarty.server.SERVER_NAME}/assets/js/date.js"></script>
	{/if}
	{if $path ne ''}
		<script src="http://{$smarty.server.SERVER_NAME}/assets/js/custom.js"></script>
		<script src="http://{$smarty.server.SERVER_NAME}/assets/js/custom_{$path}.js"></script>
	{/if}
	<script type="text/javascript">
		skryptcookiesPozycja = "bottom";
	</script>
	<script src="http://skryptcookies.pl/cookie.js"></script>
</body>
</html>