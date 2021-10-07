$( "form" ).on( "submit", function(e) {
 
    var dataString = $(this).serialize();
     
//    alert(dataString);
 
    $.ajax({
      type: "POST",
      url: "../db_page/_update_subdomain",
      data: dataString,
      success: function (result)
                {
                  
                   if(result == 1)
                   {    
                        add_disabled('subdomain_update_button');
                        toastr.success('Sub Domain Updated Successfully..!');
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index_sub_records";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something Went Wrong..!Please tray again..!');
                        add_disabled('subdomain_update_button');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
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
$("#delete_row").click(function ()
{
    var delete_id = $('#delete_id').val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_delete_vendor_update",
                data: 'id=' + delete_id,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                   {    
                        $('#delete_model_box').modal('hide');
                        toastr.error('Vendor Account Deleted..!');
                        setTimeout(function () {
                            window.location.href = "/vendor_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        $('#delete_model_box').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
            });

});