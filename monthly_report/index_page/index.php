<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Monthly Renewals  Report</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Monthly Renewals Report</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header bg-green-active">
                        <a href="../create_page/index"><img src="/img/icons8-add-row-52.png" alt="Smiley face" height="25" width="25" title="New"></a>
                        <a onclick="exportexcel('_index_primary_domain_table', 'primary_domain_report')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" style="padding-bottom: 50px;" id="_index_primary_domain_table">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox"  id="selectAll" value="" />
                                    </th>
                                    <th>#</th>
                                    <th hidden="">Unique ID</th>
                                    <th>Vendor</th>
                                    <th>Billed For</th>
                                    <th>Payment Method</th>
                                    <th>Expiration Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="_index_monthly_report">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-2">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" id="bulk_delete_expired_date" name="bulk_delete_expired_date" onclick="input_remove_error_notification('bulk_delete_expired_date');">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    <span id="bulk_delete_expired_date_check" class="help-block"></span>
                </div>
                <div class="col-xs-4">
                    <button type="button" class="btn  btn-danger " name="bulk_renewal_button" id="bulk_renewal_button">Bulk Renewal</button>
                    <button type="button" class="btn  btn-danger " name="bulk_delete_button" id="bulk_delete_button">Bulk Delete</button>
                    <span id="bulk_renewal_button_check" class="help-block"></span>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_index.js" type="text/javascript"></script>
