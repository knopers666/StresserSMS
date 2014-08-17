{include file="header.tpl"}
{include file="menu.tpl"}
{config_load file="lang_`$lang`.conf" section="lang_contact"}
<main class="container">
	<section id="contact" class="row">
		<div class="col-md-12">
			<div class="box">
				<legend>{#contact#}</legend>
				<address>
					<strong>Email:</strong> {#email#}
				</adress>
			</div>
		</div>
	</section>
</main>
{assign var=path value=''}
{include file="footer.tpl"}
