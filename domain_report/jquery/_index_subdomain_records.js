var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("id");
$.ajax
        ({
            url: "../viewlist_page/_index_subdomain_records_viewlist",
            type: "POST",
             data: {filter: _filter},
            cache: false,
            success: function (data)
            {
                $('#_sub_domain_records').html(data);
            }
        });
$("#delete_row_subdomain").click(function ()
{
    var delete_id_domain = $('#delete_id_domain').val();
    var domain = $('#domain').val();
    var sub_domain = $('#sub_domain').val();

    $.ajax
            ({
                type: "POST",
                url: "../db_page/_delete_subdomain",
                data: 'id=' + delete_id_domain+ '&domain=' + domain+ '&sub_domain=' + sub_domain,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                   {    
                        $('#delete_model_box_domain').modal('hide');
                        toastr.error('Sub Domain Deleted..!');
                        setTimeout(function () {
                            window.location.href = "/domain_report/index_page/index_sub_records";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        $('#delete_model_box_domain').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
            });

});