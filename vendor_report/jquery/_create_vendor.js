$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_insert_vendor",
      data: dataString,
      success: function (result)
                {
                    if(result == 1)
                   {    
                        add_disabled('create_account_button');
                        toastr.success('Vendor Account Added..!');
                        setTimeout(function () {
                            window.location.href = "/vendor_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Wrong Credential..!Please tray again..!');
                        add_disabled('create_account_button');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
    e.preventDefault();
 });
$("#account_no").change(function ()
{
    var account_no = $("#account_no").val();
    var vendor = $("#vendor").val();
    $.ajax
            ({
                type: "POST",
                url: "../create_vendor/check_account_number",
                data: 'account_no=' + account_no + '&vendor=' + vendor,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_success_notification('account_no','Account name is Valid..!');
                        remove_disabled('create_account_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_error_notification('account_no','Account name already exists..!');
                        add_disabled('create_account_button');
                        return false;
                    }
                }
            })
});
$("#vendor").change(function ()
{
    input_remove_error_notification('vendor');
    remove_disabled('create_account_button');
    remove_readonly('account_no');
    remove_readonly('username');
    remove_readonly('password');
    return true;
});
$("#username").change(function ()
{
    var username = $("#username").val();
    var vendor = $("#vendor").val();
    $.ajax
            ({
                type: "POST",
                url: "../create_vendor/check_username",
                data: 'username=' + username + '&vendor=' + vendor,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_success_notification('username','Username name is Valid..!');
                        remove_disabled('create_account_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_error_notification('username','Username name already exists..!');
                        add_disabled('create_account_button');
                        return false;
                    }
                }
            });
});
$("#email").change(function ()
{
email_validation('email','Please enter valid eamil address..');
return false;
});