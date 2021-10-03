$('#password_reset').click(function() {
   if($('#password_reset').is(':checked')) 
   { 
      remove_hidden('password_div');
      remove_input_value('password');
   }
});
$("#email").change(function ()
{
email_validation('email');
return false;
});
$("#username").change(function ()
{
    var username = $("#username").val();
    var u_id = $("#u_id").val();
    $.ajax
            ({
                type: "POST",
                url: "../edit_users/check_username",
                data: 'username=' + username+ '&id=' + u_id,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                         alert(result);
                        input_error_notification('username','Username already used some one..!');
                        return false;
                     }
                }
            });
});