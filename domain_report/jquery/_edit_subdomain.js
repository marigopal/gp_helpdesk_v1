$( "form" ).on( "submit", function(e) {
 
    var dataString = $(this).serialize();
     
//    alert(dataString);
 
    $.ajax({
      type: "POST",
      url: "../db_page/_update_subdomain",
      data: dataString,
      success: function (result)
                {
                   if (result == 1)
                   {
                      success_alert('alert_notification','Domain Updated Successfulkly..!');
                      setTimeout(function () {
                           window.location.href = "/domain_report/index_page/index";
                       }, 3000);
                   }
                   else
                   {
                       danger_alert('alert_notification','Somthing Went problem..!');
                       setTimeout(function () {
                           window.location.reload();
                       }, 3000);
                   }
                }
    });
 
    e.preventDefault();
  });