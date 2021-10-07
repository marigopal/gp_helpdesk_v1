$( "form" ).on( "submit", function(e) 
{
    var dataString = $(this).serialize();   
    $.ajax({
      type: "POST",
      url: "../db_page/_insert_ticket.php",
      data: dataString,
      success: function (result)
                {
                    if(result == 1)
                    {    
                         add_disabled('create_ticket_button');
                         toastr.success('Ticket created successfully..!');
                         setTimeout(function () {
                             window.location.href = "/helpdesk_report/index_page/index";
                         }, 2000);
                     }
                    else 
                    {    
                         toastr.error('Wrong Credential..!Please tray again..!');
                         add_disabled('create_ticket_button');  
                         setTimeout(function () {
                             window.location.reload();
                         }, 2000);
                     }
                }
    });
    e.preventDefault();
 });