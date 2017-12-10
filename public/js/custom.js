
    
function getdistricts(ds){
    var key=$(ds).val();
    $.ajax({
        type: "GET",
        url: APP_URL + '/get/districts/'+ key,
        //data: { _token: $('meta[name="csrf-token"]').attr('content'),key:key },
        success : function(data){

        	$('#districts').empty();
        	$('<option selected >Select District</option>').appendTo('#districts');
             $.each(data, function (key,value) {
            	$('<option value="'+key+'"> '+value.toUpperCase()+' </option>').appendTo('#districts');
			});
		}		   
    });
}