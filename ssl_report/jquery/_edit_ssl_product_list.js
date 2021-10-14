
$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_update_ssl_prodcut_list",
      data: dataString,
      success: function (result)
                {
                   
                    if(result == 1)
                   {    
                        add_disabled('update_ssl_button');
                        toastr.success('SSL Product List Updated Successfully..!');
                        setTimeout(function () {
                            window.location.href = "/ssl_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        add_disabled('update_ssl_button');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
    e.preventDefault();
 });