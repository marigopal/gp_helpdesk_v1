function placeholder(id, msg)
{
    $("#" + id).attr("placeholder", msg);
    $("#" + id).focus();
}
function placeholder_emptyval(id, msg)
{
    var id_value = $("#" + id).val();

    $("#" + id).val('');
    $("#" + id).attr("placeholder", msg);
    $("#" + id).focus();
}
function exportexcel(table, name)
{
    $("#" + table).table2excel
            ({
                name: "Table2Excel",
                filename: name,
                fileext: ".xls"
            });
}
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
                        location.reload();
                    }
                });
    }
}
function input_error_notification(input,msg)
{
    $("#"+input).parent('div').removeClass('has-success').addClass('has-error');
    $("#"+input+"_check").html(msg);
    $("#"+input).focus();
}
function hide(id)
{
    $("#"+id).modal('hide');
}
function input_remove_error_notification(id)
{
    $("#"+id).parent('div').removeClass('has-success').removeClass('has-error');
    $("#"+id+"_check").html('');
    $("#"+id).focus();
}

