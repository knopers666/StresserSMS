$(document).ready(function() {	
	$("#skype").click(function() {
		var btn = $(this);
		btn.button('loading');
		toolrequest($('#inputSkype').val(), 'skype', btn);
	});
	$("#domain").click(function() {
		toolrequest($('#inputDomain').val(), 'domain');
	});
	$("#isdown").click(function() {
		toolrequest($('#inputDown').val(), 'isdown');
	});
	
	var toolrequest = function(arg, method, btn) {
		var data = "arg=" + arg + "&method=" + method;
        $.ajax({
			type: "POST",
			url: "ajax/tools.php",
			data: data,
			dataType: 'JSON',
			success : function(info) {
				(info.result) ? alert_make(info.msg, 'success') : alert_make(info.msg, 'danger');
				btn.button('reset');
			},
			error: function(error) {
				alert_make(error.responseText, 'danger');
            },
            beforeSend: function(before) {
				$('#alert_placeholder').empty();
            }
        });
    };
});