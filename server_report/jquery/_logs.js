var url_string = window.location.href;
var url = new URL(url_string);
var _filter= url.searchParams.get("filter");
$.ajax({
		url: "../viewlist_page/_logs_server_report",
		type: "POST",
                data: {filter: _filter},
		cache: false,
		success: function(data){
                    $('#_logs_server_report').html(data); 
		}
	});