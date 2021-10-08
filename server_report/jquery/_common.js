$("#vendor").change(function ()
{
    var vendor = $(this).val();
    $.ajax
    ({
        url: '../create_page/get_accountno',
        type: 'post',
        data: {vendor: vendor},
        dataType: 'json',
        success: function (response)
                {
                    $("#account").empty();
                    $("#account").append("<option value=''>Please Select </option>");
                    var len = response.length;
                    if (len != 0)
                    {
                        
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