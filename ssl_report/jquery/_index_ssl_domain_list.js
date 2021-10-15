var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
		url: "../viewlist_page/_index_ssl_domain_report",
		type: "POST",
                 data: {filter: _filter},
		cache: false,
		success: function(data){
			$('#_ssl_domain_report').html(data); 
		}
});
$("#change_ssl_domain_name").change(function ()
{
    var change_ssl_domain_name_id = $("#change_ssl_domain_name_id").val();
    var domain_name = $("#change_ssl_domain_name").val();
   
    $.ajax
            ({
                type: "POST",
                url: "../db_page/check_domain_change",
                data: 'id=' + change_ssl_domain_name_id+ '&domain_name=' + domain_name,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_success_notification('change_ssl_domain_name','Domain name is valid..!')
                        remove_disabled ('add_domain_ssl_save_button');
                       domain_name_validation('change_ssl_domain_name_save_button');
                        return false;
                    } else if (result == 1)
                    {
                        
                        
                        input_error_notification('change_ssl_domain_name','Domain name already exist..!');
                        add_disabled('change_ssl_domain_name_save_button');
                        return false;
                    }
                }
            });
        });
        $("#change_ssl_domain_name_save_button").click(function ()
{
    var change_ssl_domain_name_id = $("#change_ssl_domain_name_id").val();
    var domain_name = $("#change_ssl_domain_name").val();
  
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_update_ssl_change_domain",
                data: 'id=' + change_ssl_domain_name_id+ '&domain_name=' + domain_name,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                    {    
                         hide( 'change_ssl_domain_name_model_box_server');
                            toastr.success('Domain name Updated successfully..!');
                            setTimeout(function () {
                             window.location.href = "/ssl_report/index_page/index_ssl_domain_list";
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