$.ajax({
		url: "../viewlist_page/_index_server_report",
		type: "POST",
		cache: false,
		success: function(data){
			$('#_ssl_report').html(data); 
		}
});
$("#delete_row_server").click(function ()
{
    var delete_id_server = $('#delete_id_server').val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_delete_server_list",
                data: 'id=' + delete_id_server,
                datatype: "html",
                success: function (result)
                {
                   if(result == 1)
                   {    
                        $('#delete_model_box_server').modal('hide');
                        toastr.error('Server Deleted successfully..!');
                        setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                        }, 2000);
                    }
                    else
                    {
                     toastr.error('Something went wrong..!Please tray again..!');
                        $('#delete_model_box_server').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);   
                    }
                }
            });

});
$("#renewed_model_box_server_save_button").click(function ()
{
    var u_id = $('#server_renewal_id').val();
    var server_next_renewal = $('#server_next_renewal').val();
    if (!ValidateDate(server_next_renewal))
    {
        input_error_notification('server_next_renewal','Date Format Invalid..!');
        return false;
    }
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_index_renewal_save",
                data: 'u_id=' + u_id + '&server_next_renewal=' + server_next_renewal,
                datatype: "html",
                success: function (result)
                {
                    
                    if (result == 1)
                   {
                       $('#_server_renewed_model_box').modal('hide');
                       toastr.success('Renewal Updated Successfully!');
                        
                        setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                        }, 2000);
                    }
                   else
                   {
                       
                       toastr.success('Somthing Went problem..!');
                       $('#_server_renewed_model_box').modal('hide');
                       setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                       }, 3000);
                   }
                }
            });
});
$('#bulk_renewal_button').click(function ()
{
    var bulk_delete_expired_date = $('#bulk_delete_expired_date').val();
    if(bulk_delete_expired_date == '')
    {
        input_error_notification('bulk_delete_expired_date','Please select expiration date..!');
        return false;
    }
    else
    {
        var id = [];
        $(':checkbox:checked').each(function (i) 
        {
            id[i] = $(this).val();
        });
        if (id.length === 0) //tell you if the array is empty
        {
            input_error_notification('bulk_renewal_button','Please select atleast one chec box..!');
            return false;
        }
        else
        {   
            $.ajax({
                url: '../db_page/_bulk_server_renewal',
                method: 'POST',
                data: {id: id, bulk_delete_expired_date: bulk_delete_expired_date},
                success: function (result)
                {
                    if (result != 0)
                   {
                       add_disabled('bulk_renewal_button');  
                       toastr.success('Bulk Renewal Updated Successfully!');
                       setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                        }, 2000);
                    }
                   else
                   {
                        toastr.error('Somthing Went problem..!');
                        add_disabled('bulk_renewal_button');  
                        setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                       }, 3000);
                   }
                        
                }
            });
        }
    }
});
$('#bulk_delete_button').click(function ()
{
        var id = [];
        $(':checkbox:checked').each(function (i) 
        {
            id[i] = $(this).val();
        });
        if (id.length === 0) //tell you if the array is empty
        {
            input_error_notification('bulk_renewal_button','Please select atleast one chec box..!');
            return false;
        }
        else
        {
            $.ajax({
                url: '../db_page/_bulk_server_delete',
                method: 'POST',
                data: {id: id},
                success: function (result)
                {
                    if (result != 0)
                   {
                       add_disabled('bulk_delete_button');  
                       toastr.success('Bulk Deleted Successfully!');
                       setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                        }, 2000);
                    }
                   else
                   {
                        toastr.error('Somthing Went problem..!');
                        add_disabled('bulk_delete_button');  
                        setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                       }, 3000);
                   }
                        
                }
            });
        }
});