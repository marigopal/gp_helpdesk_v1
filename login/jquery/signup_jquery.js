 $("#create_submit").click(function () {
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email_id = $("#email_id").val();
    var username = $("#username").val();
    var password = $("#password").val();
    if (firstname == '')
    {
        placeholder('firstname','Enter Firstname');
        return false;
    }
    else if (lastname == '')
    {
        placeholder('lastname','Enter Lastname');
        return false;
    }
    else if (email_id == '')
    {
        placeholder('email_id','Enter Email Address');
        return false;
    }
    else if (username == '')
    {
        placeholder('username','Enter Username');
        return false;
    }
    else if (password == '')
    {
        placeholder('password','Enter Password');
        return false;
    }
    else if (email_id != '')
    {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email_id))
        {
            placeholder_emptyval('email_id','Enter Valid Email Address');
            return false;
        }
    }
});
$("#username").change(function()
{
    var username = $("#username").val();
    $.ajax
    ({
        type: "POST",
        url: "../create_page/check_username",
        data: 'username='+username,
        datatype: "html",
        success: function(result)
                {
                    if (result == 1)
                    {
                        placeholder_emptyval('username','Already Username Taken');
                        return false;
                    }
                }
    });
});