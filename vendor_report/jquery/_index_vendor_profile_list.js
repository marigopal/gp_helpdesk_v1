var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "../viewlist_page/_index_vendor_Profile_viewlist",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_vendor_profile_report').html(data);
    }
});
$("#delete_row").click(function ()
{
    var delete_id = $('#delete_id').val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_delete_vendor_profile",
                data: 'id=' + delete_id,
                datatype: "html",
                success: function (result)
                {
                   if(result == 1)
                   {    
                        $('#delete_model_box').modal('hide');
                        toastr.error('Vendor Profile deleted successfully..!');
                        setTimeout(function () {
                            window.location.href = "/vendor_report/index_page/index_vendor_profile";
                        }, 2000);
                    }
                    else
                    {
                     toastr.error('Something went wrong..!Please tray again..!');
                        $('#delete_model_box').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);   
                    }
                }
            });

});