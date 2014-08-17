$(document).ready(function() {
	$('#boot-form').bootstrapValidator({
        message: 'Ta wartość nie jest prawidłowa',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            AdresIP: {
                validators: {
                    notEmpty: {
                        message: 'Adres IP nie może być pusty'
                    }
                }
            },
            SMS: {
                validators: {
                    notEmpty: {
                        message: 'Musisz podać kod zwrotny'
                    }
                }
            },
            tos: {
                validators: {
                    notEmpty: {
                        message: 'Musisz zakceptować regulamin'
                    }
                }
            }
        }
    });
    
    $("#tos").click(function() {
        $.ajax({
            url: 'tos.html',
            success: function(data) {
                $("div.modal-body").html(data);
            }
        });
    });
	$("#send").click(function() {
		var btn = $(this);
		btn.button('loading');
		$("#alert_placeholder").empty();
		var data = "inputIP="+ $('input[name=AdresIP]').val() + "&inputMethod=" + $('#inputMethod').val() + "&inputSMS=" + $('input[name=SMS]').val();
		$.ajax({
			type: "POST",
			url: "ajax/send.php",
			data: data,
			dataType: 'JSON',
			success : function(info) {
				if(info.result)
					$(".form-horizontal")[0].reset();
				(info.result) ? alert_make(info.msg, 'success') : alert_make(info.msg, 'danger');
				btn.button('reset');
			},
			error: function(error) {
				alert_make(error.responseText, 'danger');
				btn.button('reset');
			}
		});
	});
    var update = function() {
        $.ajax({
            url: 'ajax/busy.php',
			dataType: 'JSON',
            success: function(data) {
                $('#loading-indicator').hide();
                if (!data.result) 
                {
                    $('#response').css("color", "green");
                    $('#response').append("AKTYWNE");
					$('button').prop('disabled', false);
                } 
                else 
                {
                    $('#response').css("color", "red");
                    $('#response').append("OBCIĄŻONE");
					$('button').prop('disabled', true);
                }
            },
            beforeSend: function(before) {
                $('#response').contents().filter(function() {
                    return this.nodeType == 3;
                }).remove();
                $('#loading-indicator').show();
            }
        });
    };
    update();
    setInterval(update, 10000);
});