{include file="header.tpl"}
{include file="menu.tpl"}
{config_load file="lang_`$lang`.conf" section="lang_index"}
<main class="container">
	{include file="noscript.tpl"}
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span><strong>Prosimy nie wysłać SMS-ów, ponieważ usługa jest dopiero w przygotowaniu.</strong></span>
	</div>
	<section id="alert_placeholder"></section>
	<section id="boot-form" class="row">
		<div class="col-md-12">
			<div class="box">
				{include file="boot_form.tpl"}
			</div>
		</div>
	</section>
	<section id="status" class="row">
		<div class="col-md-12">
			<div class="box">
				<h1><p class="text-center">{#status#}</p></h1>
				<h1><p id="response" class="text-center"><img src="assets/img/ajax-loader.gif" id="loading-indicator" /></p></h1>
			</div>
		</div>
	</section>
</main>
{assign var=path value='index'}  
{include file="tos_modal.tpl"}
{include file="footer.tpl"}
