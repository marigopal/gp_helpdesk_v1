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
function remove_hidden(id)
{
    $("#"+id).removeAttr('hidden');
}
function remove_input_value(id)
{
    $("#"+id).val('');
}
function email_validation(email)
{
var email_id = $("#email").val();
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!expr.test(email_id))
    {
        $("#"+email).parent('div').removeClass('has-success').addClass('has-error');
        $("#"+email+"_check").html('Entered email id is not valid..!');
        $("#"+email).focus();
        
    }
}
function input_remove_error_notification(id)
{
    $("#"+id).parent('div').removeClass('has-success').removeClass('has-error');
    $("#"+id+"_check").html('');
    $("#"+id).focus();
}


