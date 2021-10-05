$.ajax
        ({
            url: "../viewlist_page/_index_subdomain_records_viewlist",
            type: "POST",
            cache: false,
            success: function (data)
            {
                $('#_sub_domain_records').html(data);
            }
        });       