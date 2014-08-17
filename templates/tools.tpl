{include file="header.tpl"}
{include file="menu.tpl"}
{config_load file="lang_`$lang`.conf" section="lang_tools"}
<main class="container">
	<div id="alert_placeholder"></div>
	<section id="tools">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Skype Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputSkype" class="col-sm-3 control-label">{#username#}</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputSkype" placeholder="user123">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="skype" data-loading-text="{#checking#}">Resolve</button>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Domain Resolver</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputDomain" class="col-sm-3 control-label">{#domain#}</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputDomain" placeholder="example.com">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="domain" data-loading-text="{#checking#}">Resolve</button>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="box">
					<legend>Is down?</legend>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputDown" class="col-sm-3 control-label">{#site#}</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputDown" placeholder="http://example.com/">
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block" id="isdown" data-loading-text="{#checking#}">{#check#}</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
{assign var=path value='tools'} 
{include file="footer.tpl"}
