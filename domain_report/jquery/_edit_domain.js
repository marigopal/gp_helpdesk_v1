$( "form" ).on( "submit", function(e) {
 
    var dataString = $(this).serialize();
     
//    alert(dataString);
 
    $.ajax({
      type: "POST",
      url: "../db_page/_update_domain",
      data: dataString,
      success: function (result)
                {
                   if(result == 1)
                   {    
                        add_disabled('update_button');
                        toastr.success('Domain Updated Successfully..!');
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something Went Wrong..!Please tray again..!');
                        add_disabled('update_button');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
 
    e.preventDefault();
  });