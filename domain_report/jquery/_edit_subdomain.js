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
                           window.location.href = "/domain_report/index_page/index_sub_records";
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
  $("#host").change(function ()
{
    var domain_name = $("#domain_name").val();
    var host = $("#host").val();
    var id = $("#id").val();
    $.ajax
            ({
                type: "POST",
                url: "../edit_domain/check_subdomain_name",
                data: 'host=' + host + '&domain_name=' + domain_name + '&id=' + id,
                datatype: "html",
                success: function (result)
                {
//                    if (result == 0)
//                    {
//                        $('#sub_domain_name').parent('div').removeClass('has-error').addClass(' has-success');
//                        $('#sub_domain_name_check').html('Sub Domain name is Available..!');
//                        $('#subdomain_update_button').removeAttr('disabled');
//                        $('#sub_domain_name').focus();
//                        return false;
//                    } else if (result == 1)
//                    {
//
//                        $('#sub_domain_name').parent('div').removeClass('has-success').addClass('has-error');
//                        $('#sub_domain_name_check').html('Sub Domain name you entered already exists..!');
//                        $('#subdomain_update_button').attr('disabled', true);
//                        $('#sub_domain_name').focus();
//                        return false;
//                    }
                }
            })
});