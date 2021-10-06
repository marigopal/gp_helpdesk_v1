$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_check_login",
      data: dataString,
      success: function (result)
                {
                   if(result == 1)
                   {    
                        add_disabled('login_submit');
                        toastr.success('Login Success..!');
                        setTimeout(function () {
                            window.location.href = "/home/index";
                        }, 1000);
                    }
                   else 
                   {    
                        toastr.error('Wrong Credential..!');
                        add_disabled('login_submit');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    }
                }
    });
    e.preventDefault();
 });