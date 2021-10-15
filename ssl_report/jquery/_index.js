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
    if(ssl_expiration_date === '0000-00-00'){
      
        remove_hidden('ssl_expiration_date_div');
    }
    else
    {
        add_hidden('ssl_expiration_date_div');
    }
}
$("#add_domain_ssl_save_button").click(function ()
{
    var add_domain_ssl_id = $('#add_domain_ssl_id').val();
    var add_domain_name_ssl_val = $('#add_domain_name_ssl').val();
    var add_domain_ssl_expiration_date_val = $('#add_domain_ssl_expiration_date').val();
    if(add_domain_ssl_expiration_date_val === '0000-00-00')
    {
       input_error_notification('add_domain_ssl_expiration_date','Please enter Expired Date..!');
        return false;
    }
    
    else if(add_domain_name_ssl_val === '')
    { 
        input_error_notification('add_domain_name_ssl','Please enter Domain name..!');
        return false;
    }
    else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "../db_page/_add_domain_ssl_list",
                    data: 'id=' + add_domain_ssl_id + '&add_domain_name_ssl_val=' + add_domain_name_ssl_val+ '&add_domain_ssl_expiration_date_val=' + add_domain_ssl_expiration_date_val,
                    datatype: "html",
                    success: function (result)
                    {
                        
                        hide( 'add_domain_ssl_model_box');
                       if(result == 1)
                    {    
                            toastr.success('Domain name Added successfully..!');
                            setTimeout(function () {
                             window.location.href = "/ssl_report/index_page/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Something Went Wrong..!Please tray again..!');
                       setTimeout(function () {
                             window.location.reload();
                         }, 2000);
                     }
                    }
                });
    
    }    
  
    
    
});
$("#add_domain_name_ssl").change(function ()
{
    var domain_name = $("#add_domain_name_ssl").val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/check_domain",
                data: 'domain_name=' + domain_name,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_error_notification('add_domain_name_ssl','Domain name already exist..!');
                        add_disabled('add_domain_ssl_save_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_success_notification('add_domain_name_ssl','Domain name is valid..!')
                        remove_disabled ('add_domain_ssl_save_button');
                       domain_name_validation('add_domain_name_ssl');
                        return false;
                    }
                }
            });
        });
$("#expired_ssl_product_button").click(function ()
{
  
    var ssl_product_list_uid = $("#ssl_product_list_uid").val();
    
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_update_ssl_expired",
                data: 'id=' + ssl_product_list_uid,
                datatype: "html",
                success: function (result)
                {
                    hide( 'expired_ssl_product_modal_box');
                       if(result == 1)
                    {    
                            toastr.success('SSL Status changed to Expirted..!');
                            setTimeout(function () {
                             window.location.href = "/ssl_report/index_page/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Something Went Wrong..!Please tray again..!');
                       setTimeout(function () {
                             window.location.reload();
                         }, 2000);
                     }
                }
            });
   
});