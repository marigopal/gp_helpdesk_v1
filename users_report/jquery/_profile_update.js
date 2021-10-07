$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_user_profile_update.php",
      data: dataString,
      success: function (result)
                {
                    
                    if(result == 1)
                    {    
                         add_disabled('update_user');
                         toastr.success('User Profile Updated successfully..!');
                         setTimeout(function () {
                             window.location.href = "/home/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Something went wrong..!Please tray again..!');
                         add_disabled('update_user');  
                         setTimeout(function () {
                             window.location.reload();
                         }, 2000);
                     }
                }
    });
    e.preventDefault();
 });
$('#password_reset').click(function() {
   if($('#password_reset').is(':checked')) 
   { 
      remove_hidden('password_div');
      remove_input_value('password');
   }
});
$("#email").change(function ()
{

email_validation('email','Enter the valid email address..!');

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
                        add_disabled('update_user');
                        input_error_notification('username','Username already used some one..!');
                        return false;
                     }
                }
            });
});
