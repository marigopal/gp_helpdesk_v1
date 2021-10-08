$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_edit_server_update",
      data: dataString,
      success: function (result)
                {
                    if(result == 1)
                   {    
                        add_disabled('update_server_button');
                        toastr.success('Server Updated Successfully..!');
                        setTimeout(function () {
                            window.location.href = "/server_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        add_disabled('update_server_button');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
    e.preventDefault();
 });