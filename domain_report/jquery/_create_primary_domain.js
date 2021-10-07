$( "form" ).on( "submit", function(e) {
 
    var dataString = $(this).serialize();
     
//    alert(dataString);
 
    $.ajax({
      type: "POST",
      url: "../db_page/_insert_new_domain",
      data: dataString,
      success: function (result)
                {
                  if(result == 1)
                   {    
                        add_disabled('create_domain_button');
                        toastr.success('Domain Added Successfully..!');
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something Went Wrong..!Please tray again..!');
                        add_disabled('create_domain_button');  
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
    });
 
    e.preventDefault();
  });

$("#type").change(function ()
{
    var type = $(this).val();
    if (type == '')
    {
        location.reload();
    }
    else if (type == 1)
    {
        remove_input_value('domain_name');
        remove_hidden('domain_name_div');
        add_required('domain_name');
        remove_hidden('point_to_div');
        add_required('point_to');
        add_required('vendor');
        add_required('account');
        add_required('exp_date');
        add_hidden('domain_list_div');
        add_hidden('sub_domain_name_div');
        remove_hidden('vendor_div');
        remove_hidden('account_div');
        remove_hidden('exp_date_div');
        remove_hidden('auto_renewal_div');
        add_required('vendor');
        add_required('account');
    }
    //Sub Domain value changed
    else 
    {
        remove_hidden('domain_list_div');
        add_required('domain_list');
        remove_required('domain_name');
        remove_required('vendor');
        remove_required('account');
        remove_required('exp_date');
        remove_required('auto_renewal_add');
        add_hidden('vendor_div');
        add_hidden('account_div');
        add_hidden('exp_date_div');
        add_hidden('auto_renewal_div');
        
    }
    
});

$("#domain_name").change(function ()
{
    var domain_name = $("#domain_name").val();
    $.ajax
            ({
                type: "POST",
                url: "check_domain",
                data: 'domain_name=' + domain_name,
                datatype: "html",
                success: function (result)
                {
                    if (result == 0)
                    {
                        input_error_notification('domain_name','Domain name already exist..!');
                        add_disabled('create_domain_button');
                        return false;
                    } else if (result == 1)
                    {
                        input_success_notification('domain_name','Domain name is valid..!')
                        remove_disabled ('create_domain_button');
                        $('#host').val(domain_name);
                        domain_name_validation('domain_name');
                        return false;
                    }
                }
            });
    
        
});
$("#domain_list").change(function ()
{
    var domain_list = $(this).val();
    if (domain_list == "")
    {
        input_error_notification('domain_list','Please Select the Existing domain list');
        return false;
    } else
    {
        input_remove_error_notification('domain_list');
        $('#domain_name').val(domain_list);
        remove_hidden('host_div');
        add_required('host');
        remove_hidden('point_to_div');
        add_required('point_to');
        return false;
    }
});
$("#host").change(function ()
{
    var type = $("#type").val();
    var domain_name = $("#domain_name").val();
    var host = $("#host").val();
    $.ajax
            ({
                type: "POST",
                url: "../create_domain/check_sub_records",
                data: 'type=' + type + '&domain_name=' + domain_name+ '&host=' + host,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        input_error_notification('host','Record already exists..!');
                        add_disabled('create_domain_button');
                        return false;
                    } else if (result == 0)
                    {
                        input_success_notification('host','Host is Available');
                        remove_disabled('create_domain_button');
                        return false;
                    }
                }
            })
});