$("#login_submit").click(function () {

    var username = $("#login_username").val();
    var password = $("#login_password").val();
    if (username == '')
    {
        placeholder('login_username','Enter Username');
        return false;
    } else if (password == '')
    {
        placeholder('login_password','Enter Password');
        return false;
    }
});