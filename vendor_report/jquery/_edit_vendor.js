$("#account_no").change(function ()
{
    var account_no = $("#account_no").val();
    var vendor = $("#vendor").val();
    var id = $("#id").val();
    $.ajax
            ({
                type: "POST",
                url: "../edit_vendor/check_account_number",
                data: 'account_no=' + account_no + '&vendor=' + vendor + '&u_id=' + id,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_success_notification('account_no','Account name is Available..!');
                        remove_disabled('update_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_error_notification('account_no','Account name you entered already exists..!');
                        add_disabled('update_button');
                        return false;
                    }
                }
            });
});
$("#username").change(function ()
{
    var username = $("#username").val();
    var vendor = $("#vendor").val();
    var id = $("#id").val();
    $.ajax
            ({
                type: "POST",
                url: "../edit_vendor/check_username",
                data: 'username=' + username + '&vendor=' + vendor + '&id=' + id,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_error_notification('username','Username name you entered already exists..!');
                        add_disabled('update_button');
                        
                        return false;
                    } else if (result == 1)
                    {
                        input_success_notification('username','Username name is Available..!');
                        remove_disabled('update_button');
                        return false;
                    }
                }
            });
});