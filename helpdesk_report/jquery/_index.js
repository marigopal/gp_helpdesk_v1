//View the table content into index page
var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "../viewlist_page/_index_ticket_viewlist",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_ticket_report').html(data);
    }
});
function ticket_update(id,reason,button,modelbox_name,created_on)
{
    var id_value = $("#"+id).val();
    var reason_value = $("#"+reason).val();
    var button_value = $("#"+button).val();
    var created_on_value = $("#"+created_on).val();
    if (reason_value == '')
    {
        input_error_notification(reason,'Reason cannot be blank..!');
        return false;
        
    }
    else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "../db_page/_model_update_ticket",
                    data: 'id=' + id_value + '&reason=' + reason_value+ '&action=' + button_value+ '&created_on_value=' + created_on_value,
                    datatype: "html",
                    success: function (result)
                    {
                        hide(modelbox_name);
                        window.location.href = "/helpdesk_report/index";
                    }
                });
    }
}

