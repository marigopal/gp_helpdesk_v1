$.ajax({
		url: "../viewlist_page/_index_server_report",
		type: "POST",
		cache: false,
		success: function(data){
			$('#_server_report').html(data); 
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
