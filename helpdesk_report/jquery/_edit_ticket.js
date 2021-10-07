$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_update_ticket.php",
      data: dataString,
      success: function (result)
                {
                    if(result == 1)
                    {    
                         add_disabled('btn_update');
                         toastr.success('Ticket Updated successfully..!');
                         setTimeout(function () {
                             window.location.href = "/helpdesk_report/index_page/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Wrong Credential..!Please tray again..!');
                         add_disabled('btn_update');  
                         setTimeout(function () {
                             window.location.reload();
                         }, 2000);
                     }
                }
    });
    e.preventDefault();
 });