$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_create_vendor_profile",
      data: dataString,
      success: function (result)
                {
                    if(result == 1)
                   {    
                        add_disabled('vendor_profile_create');
                        toastr.success('Vendor Profile Created..!');
                        setTimeout(function () {
                            window.location.href = "/vendor_report/index_page/index_vendor_profile";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        add_disabled('vendor_profile_create');  
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
   $.ajax
            ({
                type: "POST",
                url: "../create_vendor/check_vendor_name_profile",
                data: 'vendor=' + vendor ,
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
