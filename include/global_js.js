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

