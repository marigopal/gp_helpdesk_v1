$("#vendor").change(function ()
{
    var vendor = $(this).val();
    $.ajax
            ({
                url: '../create_domain/get_accountno',
                type: 'post',
                data: {vendor: vendor},
                dataType: 'json',
                success: function (response)
                {
                    var len = response.length;
                    if (len != 0)
                    {
                        $("#account").empty();
                        for (var i = 0; i < len; i++)
                        {
                            var id = response[i]['id'];
                            var name = response[i]['name'];
                            if (len > 0)
                            {
                                $("#account").append("<option value='" + id + "'>" + name + "</option>");
                                $('#account_check').html(len + ' Accounts are available in selected Vendor..! Please select which account you want to add..!');
                                $('#account').focus();
                            }
                        }
                    }
                }
            });
});