$(function(){
	$("#zip-select").change(function(){
      var zip = $(this).val(); 
      var dataString = "zip="+zip;

      $.ajax({
        type: "POST",
        url: "get-supplier-info.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $("#Region").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });
     });


//	$('#more').click(function(event) {
//		$('#ratana').append('<div class="form-row"><div class="form-group col-md-2"><input name="product[]" type="text" class="form-control" id="exampleFormControlInput1"></div><div class="form-group col-md-7"><input name="desc[]" type="text" class="form-control" id="exampleFormControlInput1"></div><div class="form-group col-md-1"><input name="qty[]" type="number" class="form-control" id="exampleFormControlInput1"></div><div class="form-group col-md-2"><input name="cost[]" type="number" class="form-control" id="exampleFormControlInput1"></div></div>');
//	});
});