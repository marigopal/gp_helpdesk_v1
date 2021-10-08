var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "../viewlist_page/_index_users_viewlist",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_users_report').html(data);
    }
});
$("#users_default_access_model_box_button").click(function ()
{
    var users_change_access_uid = $('#users_change_access_uid').val();
    var users_change_access_name = $('#users_change_access_name').val();
    if(users_change_access_name == '')
    {
        input_error_notification('users_change_access_name','Should Select One..!');
        return false;
    }
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_user_change_access",
                data: 'id=' + users_change_access_uid+'&users_change_access_name=' +users_change_access_name,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                   {    
                        $('#users_default_access_model_box').modal('hide');
                        toastr.success('User Access Updated..!');
                        setTimeout(function () {
                            window.location.href = "/users_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        $('#users_default_access_model_box').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
            });

});
$("#users_property_button").click(function ()
{
    var user_property_id = $('#user_property_id').val();
    var user_property_action = $('#user_property_action').val();
    $.ajax
            ({
                type: "POST",
                url: "../db_page/_users_status_update",
                data: 'id=' + user_property_id+'&user_property_action=' +user_property_action,
                datatype: "html",
                success: function (result)
                {
                    if(result == 1)
                   {    
                        $('#users_property_change_model_box').modal('hide');
                        toastr.success('User Properties Updated..!');
                        setTimeout(function () {
                            window.location.href = "/users_report/index_page/index";
                        }, 2000);
                    }
                   else 
                   {    
                        toastr.error('Something went wrong..!Please tray again..!');
                        $('#users_property_change_model_box').modal('hide'); 
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                }
            });

});