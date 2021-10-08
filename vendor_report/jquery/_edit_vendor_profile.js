$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_edit_vendor_profile_update",
      data: dataString,
      success: function (result)
                {
                    if(result == 1)
                   {    
                        add_disabled('vendor_profile_update');
                        toastr.success('Vendor Profile Updated..!');
                        setTimeout(function () {
                            window.location.href = "/vendor_report/index_page/index_vendor_profile";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        add_disabled('vendor_profile_update');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
    e.preventDefault();
 });
 $("#vendor").change(function ()
{
    var vendor = $("#vendor").val();
    var id = $("#id").val();
    $.ajax
            ({
                type: "POST",
                url: "../edit_vendor/check_vendor_name_profile",
                data: 'vendor=' + vendor + '&id=' + id ,
                datatype: "html",
                success: function (result)
                {
                    
                    if (result == 0)
                    {
                        input_success_notification('vendor','Vendor name is Valid..!');
                        remove_disabled('vendor_profile_update');
                        return false;
                    } else if (result == 1)
                    {
                        input_error_notification('vendor','Vendor name you entered already exists..!');
                        add_disabled('vendor_profile_update');
                        return false;
                    }
                }
            });
});
