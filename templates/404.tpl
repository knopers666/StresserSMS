{include file="header.tpl"}
{include file="menu.tpl"}
{config_load file="lang_`$lang`.conf" section="lang_404"}
<main class="container">
	<div class="logo">
	    <h1>{#info_404#}</h1>
    </div>
	<div class="row text-center">
		<img src="http://{$smarty.server.SERVER_NAME}/assets/img/404.jpg" style="max-width: 100%;" alt="404">
	</div>
</main>
{assign var=path value=''}
{include file="footer.tpl"}
