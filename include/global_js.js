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
function input_success_notification(input,msg)
{
    $("#"+input).parent('div').removeClass('has-error').addClass(' has-success');
    $("#"+input+"_check").html(msg);
    $("#"+input).focus();
}
function input_remove_error_notification(id)
{
    $("#"+id).parent('div').removeClass('has-success').removeClass('has-error');
    $("#"+id+"_check").html('');
    $("#"+id).focus();
}

function hide(id)
{
    $("#"+id).modal('hide');
}
function remove_hidden(id)
{
    $("#"+id).removeAttr('hidden');
}
function remove_disabled(id)
{
    $("#"+id).removeAttr('disabled');
}
function remove_readonly(id)
{
    $("#"+id).removeAttr('readonly');
}
function add_disabled(id)
{
    $("#"+id).attr('disabled', true);
}
function add_hidden(id)
{
    $("#"+id).attr('hidden', true);
}
function remove_input_value(id)
{
    $("#"+id).val('');
}
function email_validation(email)
{
var email_id_value = $("#email").val();
    var expr = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email_id_value))
    {
        $("#"+email).parent('div').removeClass('has-success').addClass('has-error');
        $("#"+email+"_check").html('Entered email id is not valid..!');
        $("#"+email).focus();
        
    }
}
function ValidateDate(next_renewal)
{
    var dtRegex = new RegExp(/^\d{4}-\d{2}-\d{2}$/);
    return dtRegex.test(next_renewal);
}
