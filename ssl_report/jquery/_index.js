$.ajax({
		url: "../viewlist_page/_index_ssl_product_report",
		type: "POST",
		cache: false,
		success: function(data){
			$('#_ssl_report').html(data); 
		}
});

function add_domain_modal(ssl_id,ssl_expiration_date)
{
    
    $('#add_domain_ssl_id').val(ssl_id);
    $('#add_domain_ssl_expiration_date').val(ssl_expiration_date);
    if(ssl_expiration_date !== '0000-00-00'){
      
        add_hidden('ssl_expiration_date_div');
        
    }
    else
    {
       
        $("#ssl_expiration_date_div").show();
    }
}