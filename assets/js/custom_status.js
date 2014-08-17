$(document).ready(function() {
	$("#search_button").click(function() {
		var data = "id=" + $('#inputID').val();
		$.ajax({
			type: "POST",
			url: "ajax/status.php",
			data: data,
			dataType: 'JSON',
			success : function(info) {
				if(!info.result)
					alert_make(info.msg, 'warning');
				else {
					$('#id').text(info.status.id);
					$('#ip').text(info.status.target);
					$('#method').text(info.status.method);
					$('#date').text(info.status.time_execute);
					$('#time').text(info.status.time_boot);
					if(info.status.stopped)
						$('#status').html('<span class="label label-danger">Zatrzymany</span>');
					else
						(Date.parse(info.status.time_execute).addSeconds(parseInt(info.status.time_boot)) > new Date()) ? $('#status').html('<span class="label label-warning">W trakcie</span>') : $('#status').html('<span class="label label-success">Wykonano</span>');
					$('#result').show('slow');
				}
			},
			error: function(error) {
				alert_make(error.responseText, 'danger');
            },
            beforeSend: function(before) {
				$('#alert_placeholder').empty();
				$('#result').hide('slow');
				$('#id').empty();
				$('#ip').empty();
				$('#method').empty();
				$('#date').empty();
				$('#time').empty();
				$('status').empty();
            }
        });
	});
});