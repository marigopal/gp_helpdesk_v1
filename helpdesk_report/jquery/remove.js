$("#save_ticket_delete").click(function ()
{
    alert('delete ticket');
    var delete_ticket_id = $('#delete_ticket_id').val();
    var delete_reason_ticket = $('#delete_reason_ticket').val();
    if (delete_reason_ticket == '')
    {
        $('#delete_reason_ticket').parent('div').removeClass('has-success').addClass('has-error');
        $('#delete_reason_ticket_check').html('Please Select the Auto Renewal Status');
        $('#delete_reason_ticket').focus();
        return false;
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "delete_ticket",
                    data: 'u_id=' + delete_ticket_id + '&delete_reason_ticket=' + delete_reason_ticket,
                    datatype: "html",
                    success: function (result)
                    {
                        $('#delete_ticket_popup').modal('hide');
                        location.reload();
                    }
                })
    }
});
$("#delete_reason_ticket").click(function ()
{
    $('#delete_reason_ticket').parent('div').removeClass('has-success').removeClass('has-error');
    $('#delete_reason_ticket_check').html('');
    $('#delete_reason_ticket').focus();
    return false;
});

$("#assignto_list_button").click(function ()
{
    var assignto_ticket_id = $('#assignto_ticket_id').val();
    var assignto_list = $('#assignto_list').val();
    if (assignto_list == '')
    {
        $('#assignto_list').parent('div').removeClass('has-success').addClass('has-error');
        $('#assignto_list_check').html('Please Select the Support');
        $('#assignto_list').focus();
        return false;
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "assign_ticket",
                    data: 'u_id=' + assignto_ticket_id + '&assignto_list=' + assignto_list,
                    datatype: "html",
                    success: function (result)
                    {
                        $('#delete_ticket_popup').modal('hide');
                        location.reload();
                    }
                })
    }
});

$("#save_ticket_hold").click(function ()
{
    var hold_ticket_id = $('#hold_ticket_id').val();
    var hold_reason_ticket = $('#hold_reason_ticket').val();
    if (hold_reason_ticket == '')
    {
        $('#hold_reason_ticket').parent('div').removeClass('has-success').addClass('has-error');
        $('#hold_reason_ticket_check').html('Please Enter the reason');
        $('#hold_reason_ticket').focus();
        return false;
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "hold_ticket",
                    data: 'u_id=' + hold_ticket_id + '&hold_reason_ticket=' + hold_reason_ticket,
                    datatype: "html",
                    success: function (result)
                    {
                        $('#holdticket').modal('hide');
                        location.reload();
                    }
                })
    }
});
$("#hold_reason_ticket").click(function ()
{
    $('#hold_reason_ticket').parent('div').removeClass('has-success').removeClass('has-error');
    $('#hold_reason_ticket_check').html('');
    $('#hold_reason_ticket').focus();
    return false;
});
$("#save_ticket_observation").click(function ()
{
    var observationticket_id = $('#observationticket_id').val();
    var observation_reason_ticket = $('#observation_reason_ticket').val();
    if (observation_reason_ticket == '')
    {
        $('#observation_reason_ticket').parent('div').removeClass('has-success').addClass('has-error');
        $('#observation_reason_ticket_check').html('Please Enter the reason');
        $('#observation_reason_ticket').focus();
        return false;
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "observation_ticket",
                    data: 'u_id=' + observationticket_id + '&observation_reason_ticket=' + observation_reason_ticket,
                    datatype: "html",
                    success: function (result)
                    {
                        $('#observationticket').modal('hide');
                        location.reload();
                    }
                })
    }
});
$("#observation_reason_ticket").click(function ()
{
    $('#observation_reason_ticket').parent('div').removeClass('has-success').removeClass('has-error');
    $('#observation_reason_ticket_check').html('');
    $('#observation_reason_ticket').focus();
    return false;
});

$("#save_ticket_solution").click(function ()
{
    var resolved_id = $('#resolved_id').val();
    var solution_ticket = $('#solution_ticket').val();
    if (solution_ticket == '')
    {
        $('#solution_ticket').parent('div').removeClass('has-success').addClass('has-error');
        $('#solution_ticket_check').html('Please Enter the Solution');
        $('#solution_ticket').focus();
        return false;
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "solution_ticket",
                    data: 'u_id=' + resolved_id + '&solution_ticket=' + solution_ticket,
                    datatype: "html",
                    success: function (result)
                    {
                        $('#resolved_ticket').modal('hide');
                        location.reload();
                    }
                })
    }
});
$("#solution_ticket").click(function ()
{
    $('#solution_ticket').parent('div').removeClass('has-success').removeClass('has-error');
    $('#solution_ticket_check').html('');
    $('#solution_ticket').focus();
    return false;
});
