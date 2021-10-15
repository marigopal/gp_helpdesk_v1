$( "form" ).on( "submit", function(e) {
 
    var dataString = $(this).serialize();
     
//    alert(dataString);
 
    $.ajax({
      type: "POST",
      url: "../db_page/_insert_monthly_renewals",
      data: dataString,
      success: function (result)
                {
                  if(result == 1)
                   {    
                        add_disabled('create_monthly_renewals');
                        toastr.success('Monthly Renewals Added Successfully..!');
                        setTimeout(function () {
                            window.location.href = "/monthly_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something Went Wrong..!Please tray again..!');
                        add_disabled('create_monthly_renewals');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
 
    e.preventDefault();
  });
