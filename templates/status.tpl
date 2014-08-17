 {include file="header.tpl"}
{include file="menu.tpl"}
{config_load file="lang_`$lang`.conf" section="lang_status"}
<main class="container">
	<div id="alert_placeholder"></div>
	<section class="box" id="search">
		<div class="row">
			<div class="col-md-12">
				<form class="form-inline" role="form">
					<div class="input-group">
						<input type="text" class="form-control" id="inputID" placeholder="{#identifier#}" value="">
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
						<th>{#id#}</th>
						<th>{#target#}</th>
						<th>{#method#}</th>
						<th>{#time#}</th>
						<th>{#date#}</th>
						<th>{#status#}</th>
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
{assign var=path value='status'} 
{include file="footer.tpl"}