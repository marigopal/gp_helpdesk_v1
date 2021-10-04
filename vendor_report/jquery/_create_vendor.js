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
                        input_success_notification('account_no','Account name is Available..!');
                        remove_disabled('create_account_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_error_notification('account_no','Account name you entered already exists..!');
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
                        input_success_notification('username','Username name is Available..!');
                        remove_disabled('create_account_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_error_notification('username','Username name you entered already exists..!');
                        add_disabled('create_account_button');
                        return false;
                    }
                }
            });
});
$("#email").change(function ()
{
email_validation('email');
return false;
});