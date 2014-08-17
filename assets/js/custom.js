function alert_make(message, type) {
	$('#alert_placeholder').html('<div class="alert alert-' + type + ' alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>'+ ((type=="success") ? 'Sukces' : 'Błąd') +'!</strong> ' + message + '</div>');
}
$(document).ready(function() {
	$('a[href="' + location.pathname + '"]').parent('li').addClass('active');
	$(".dropdown a").click(function() {
		$.cookie("lang", $(this).text());
	});
});
