$(function(){

	$('#moreItems').click(function(event) {
		$('#items').append('<div class="form-row"><div class="form-group col-md-2"><input name="cost[]" type="number" class="form-control"></div></div>');
	});

})