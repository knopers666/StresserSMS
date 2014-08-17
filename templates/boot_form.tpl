<form class="form-horizontal" role="form" id="boot-form">
	<div class="form-group">
		<label for="inputIP" class="col-sm-2 control-label">{#ip_adress#}</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputIP" name="AdresIP" placeholder="127.0.0.1:80">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">{#time#}</label>
			<div class="col-sm-10">
				<p class="form-control-static">6 minut</p>
			</div>
	</div>
	<div class="form-group">
		<label for="inputMethod" class="col-sm-2 control-label">{#method#}</label>
		<div class="col-sm-10">
			<select class="form-control" id="inputMethod" name="Method">
				{foreach $methods as $value}
					<option value="{$value}">{$value}</option>
				{/foreach}
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="inputSMS" class="col-sm-2 control-label">{#sms_code#}</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputSMS" name="SMS" placeholder="Wyślij sms o treści HPAY.DDOS na numer 76660 (Koszt 7,38zł brutto)">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="tos">{#accept#} <a href="#" id="tos" data-toggle="modal" data-target="#tosModal">{#tos#}</a>
				</label>
			</div>
		</div>
	</div>
	<hr>
	<button type="button" class="btn btn-success btn-lg btn-block" data-loading-text="{#sending#}" id="send">{#send#}</button>
</form>