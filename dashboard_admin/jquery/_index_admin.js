$.ajax
        ({
            url: "../viewlist_page/report_domain_renewals",
            type: "POST",
            cache: false,
            success: function (data)
            {
                $('#_domain_renewals').html(data);
            }
        });
        $.ajax
        ({
            url: "../viewlist_page/report_server_renewals",
            type: "POST",
            cache: false,
            success: function (data)
            {
                $('#_server_renewals').html(data);
            }
        });
        $.ajax
        ({
            url: "../viewlist_page/report_ssl_renewals",
            type: "POST",
            cache: false,
            success: function (data)
            {
                $('#_ssl_renewal_report').html(data);
            }
        });
        $.ajax({
    url: "../viewlist_page/_index_ticket_viewlist",
    type: "POST",
    cache: false,
    success: function (data) {
        $('#_index_ticket_report').html(data);
    }
    });