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

var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "../viewlist_page/_index_ticket_viewlist",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_ticket_report').html(data);
    }
});