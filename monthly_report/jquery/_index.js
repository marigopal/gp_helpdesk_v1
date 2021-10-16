$.ajax({
		url: "../viewlist_page/_index_monthly_report",
		type: "POST",
		cache: false,
		success: function(data){
			$('#_index_monthly_report').html(data); 
		}
});
$("#monthly_renewed_model_box_save_button").click(function ()
{
	var monthly_renewal_id = $('#monthly_renewal_id').val();
    var monthly_next_renewal = $('#monthly_next_renewal').val();
	if (!ValidateDate(monthly_next_renewal))
    {
        input_error_notification('monthly_next_renewal','Date Format Invalid..!');
        return false;
    }
	$.ajax
            ({
                type: "POST",
                url: "../db_page/_index_renewal_monthly_save",
                data: 'id=' + monthly_renewal_id + '&monthly_next_renewal=' + monthly_next_renewal,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                    {    
                         add_disabled('renewed_monthly_model_box');
                         toastr.success('Monthly Renewals Updated Successfully..!');
                         setTimeout(function () {
                             window.location.href = "/monthly_report/index_page/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Something Went Wrong..!Please tray again..!');
                         add_disabled('renewed_monthly_model_box');  
                         setTimeout(function () {
                             window.location.reload();
                         }, 2000);
                     }
                }
            });
});
$("#delete_monthly_save_button").click(function ()
{
	var delete_monthly_renewal_id = $('#delete_monthly_renewal_id').val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_index_renewal_monthly_delete",
                data: 'id=' + delete_monthly_renewal_id,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                    {    
                         add_disabled('delete_monthly_renewal_model_box');
                         toastr.success('Monthly Renewals Deleted Successfully..!');
                         setTimeout(function () {
                             window.location.href = "/monthly_report/index_page/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Something Went Wrong..!Please tray again..!');
                         add_disabled('delete_monthly_renewal_model_box');  
                         setTimeout(function () {
                             window.location.reload();
                         }, 2000);
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
                url: '../db_page/_bulk_monthly_renewal',
                method: 'POST',
                data: {id: id, bulk_delete_expired_date: bulk_delete_expired_date},
                success: function (result)
                {
                    if (result != 0)
                   {
                       add_disabled('bulk_renewal_button');  
                       toastr.success('Bulk Renewal Updated Successfully!');
                       setTimeout(function () {
                            window.location.href = "/monthly_report/index_page/index";
                        }, 2000);
                    }
                   else
                   {
                        toastr.error('Somthing Went problem..!');
                        add_disabled('bulk_renewal_button');  
                        setTimeout(function () {
                            window.location.href = "/monthly_report/index_page/index";
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
                url: '../db_page/_bulk_monthly_delete',
                method: 'POST',
                data: {id: id},
                success: function (result)
                {
                    if (result != 0)
                   {
                       add_disabled('bulk_delete_button');  
                       toastr.success('Bulk Deleted Successfully!');
                       setTimeout(function () {
                            window.location.href = "/monthly_report/index_page/index";
                        }, 2000);
                    }
                   else
                   {
                        toastr.error('Somthing Went problem..!');
                        add_disabled('bulk_delete_button');  
                        setTimeout(function () {
                            window.location.href = "/monthly_report/index_page/index";
                       }, 3000);
                   }
                        
                }
            });
        }
});