function btn_load(button) {
	button.attr('disabled','disabled');
	$("#form_input").attr('disabled','disabled');
	$("#btn-click").hide();
	$("#btn-load").show();
}
function btn_reset(button) {
	button.removeAttr('disabled');
	$("#form_input").removeAttr('disabled');
	$("#btn-click").show();
	$("#btn-load").hide();
}
$(document).ready(function() {
	function get_token(invalid, die) {
		$.getJSON('//'+window.location.hostname+'/Check_Token_Vnk/get_token.php', {
			start: invalid
		}).done(function (data) {
			if (!data.error) {
				check_token(0, data, invalid, die);
			} else {
				btn_reset(button);
			}
		});
	}
	function check_token(i, array, invalid, die) {
		$.get('https://graph.facebook.com/me?access_token=' + array[i].token).done(function() {
			invalid++;
			$("#onload").text(invalid);
		}).error(function() {
			$.post('//'+window.location.hostname+'/Check_Token_Vnk/del_token.php', {
				id: array[i].id
			});
			die++;
			$("#onload-die").text(die);
		}).always(function() {
			++i;
			if (i < array.length) {
				check_token(i, array, invalid, die);
			} else if (i == array.length) {
				get_token(invalid, die);
			}
		});
	}
	$("#check_token_live").click(function() {
		button = $(this);
		btn_load(button);
		$("#check_token_live_load").slideDown("fast");
		$("#check_token_live_load_die").slideDown("fast");
		get_token(0, 0);
	});
});