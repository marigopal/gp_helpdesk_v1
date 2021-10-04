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
                    $('#renewed_model_box').modal('hide');
                    alert(result);
                    location.reload();
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
