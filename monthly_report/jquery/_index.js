$.ajax({
		url: "../viewlist_page/_index_monthly_report",
		type: "POST",
		cache: false,
		success: function(data){
			$('#_index_monthly_report').html(data); 
		}
});