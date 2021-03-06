$.ajax
        ({
            url: "../viewlist_page/_index_primary_domain_viewlist",
            type: "POST",
            cache: false,
            success: function (data)
            {
                $('#_index_primary_report').html(data);
            }
        });
$("#renewed_model_box_save_button").click(function ()
{
    var u_id = $('#renewal_id').val();
    var next_renewal = $('#next_renewal').val();
    var auto_renewal = $('#auto_renewal').val();
    if (!ValidateDate(next_renewal))
    {
        input_error_notification('next_renewal','Date Format Invalid..!');
        return false;
    }
    if (auto_renewal == '')
    {
        input_error_notification('auto_renewal','Please Select the Auto Renewal Status..!');
        return false;
    }
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_index_renewal_save",
                data: 'u_id=' + u_id + '&next_renewal=' + next_renewal + '&auto_renewal=' + auto_renewal,
                datatype: "html",
                success: function (result)
                {
                   if (result == 1)
                   {
                       $('#renewed_model_box').modal('hide');
                       toastr.success('Renewal Updated Successfully!');
                        
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index";
                        }, 2000);
                    }
                   else
                   {
                       danger_alert('alert_notification','Somthing Went problem..!');
                       setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index";
                       }, 3000);
                   }
                }
            });
});
$("#auto_renewal").change(function ()
{
    var auto_renewal = $('#auto_renewal').val();
    if (auto_renewal == "")
    {
        input_error_notification('auto_renewal','Please Select the Auto Renewal Status..!');
        return false;
    } else
    {
        input_remove_error_notification('auto_renewal');
        return false;
    }
});
$("#delete_row_subdomain").click(function ()
{
    var delete_id_domain = $('#delete_id_domain').val();
    var domain = $('#domain').val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_delete_primary_domain",
                data: 'id=' + delete_id_domain+ '&domain=' + domain,
                datatype: "html",
                success: function (result)
                {
                   if(result == 2)
                   {    
                        $('#delete_model_box_domain').modal('hide');
                        toastr.error('Your selected domain contains sub domain records..!');
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index";
                        }, 3000);
                    }
                   else if(result == 1)
                   {    
                        $('#delete_model_box_domain').modal('hide');
                        toastr.error('Primary domain deleted successfully..!');
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index";
                        }, 2000);
                    }
                    else
                    {
                     toastr.error('Something went wrong..!Please tray again..!');
                        $('#delete_model_box_domain').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);   
                    }
                }
            });

});