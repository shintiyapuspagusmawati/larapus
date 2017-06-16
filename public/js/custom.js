$(document).ready(function(){
	// comfirm delete
	$(document.body).on('submit', '.js-confirm', function(){
		var $el = $(this)
		var text = $el.data('comfirm') ? $el.data('confirm') : 'Anda Yakin Melakukan Tindakan Ini?'
		var c = confirm(text);
		return c;
	});
});