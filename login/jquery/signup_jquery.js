$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_register_user",
      data: dataString,
      success: function (result)
                {
                   if(result == 1)
                   {    
                        add_disabled('create_submit');
                        toastr.success('Register was successfully..!');
                        setTimeout(function () {
                            window.location.href = "/login/login_page/index";
                        }, 1500);
                    }
                   else 
                   {
                        toastr.error('Something went wrong..!');
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    }
                }
    });
    e.preventDefault();
 });
 $("#username").change(function()
{
    var username = $("#username").val();
    $.ajax
    ({
        type: "POST",
        url: "../db_page/_check_username",
        data: 'username='+username,
        datatype: "html",
        success: function(result)
                {
                    if (result == 1)
                    {
                       input_error_notification ('username','Username already used..!');
                       add_disabled('create_submit');
                       return false;
                    }
                    else
                    {
                        remove_disabled('create_submit');
                    }
                }
    });
});
$("#email_id").change(function()
{
    email_validation('email_id','Email address format not valid');
    return false;
});