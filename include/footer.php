<footer class="main-footer">
    <strong>Copyright © 2021 GP Global Soft Tech Pvt Ltd
</footer>
<script src="../../template_files/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../template_files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../template_files/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../template_files/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../../template_files/dist/js/adminlte.min.js"></script>
<script src="../../template_files/dist/js/demo.js"></script>
<script src="../../include/menu_close.js" type="text/javascript"></script>
<script src="../../template_files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../template_files/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../../template_files/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../../template_files/bower_components/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="../../template_files/bower_components/bootstrap-clockpicker/dist/bootstrap-clockpicker.min.js"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<script>

    $('.table-responsive').on('show.bs.dropdown', function () {
        $('.table-responsive').css("overflow", "inherit");
    });

    $('.table-responsive').on('hide.bs.dropdown', function () {
        $('.table-responsive').css("overflow", "auto");
    })

</script>
<script src="../../template_files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../template_files/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../../template_files/export_excel_js/jquery.table2excel.js" type="text/javascript"></script>
<script src="../../template_files/export_excel_js/jquery.table2excel.min.js" type="text/javascript"></script>
<script src="../../include/global_js.js" type="text/javascript"></script>
</body>
</html>