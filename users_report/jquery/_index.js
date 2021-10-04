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
function user_access_change(users_change_access_uid,users_change_access_name)
{
    var id_value = $("#"+users_change_access_uid).val();
    var users_change_access_name_value = $("#"+users_change_access_name).val();
    if(users_change_access_name_value == '')
    {
        input_error_notification(users_change_access_name,'Should Select One..!');
        return false;
    }
    else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "../db_page/_user_change_access",
                    data: 'id=' + id_value + '&users_change_access_name_value=' + users_change_access_name_value,
                    datatype: "html",
                    success: function (result)
                    {
                        window.location.href = "/users_report/index_page/index";
                    }
                });
    }

}