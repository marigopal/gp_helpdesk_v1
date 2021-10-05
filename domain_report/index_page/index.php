<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <div class="alert alert-success" hidden="" id="alert_notification">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
    <section class="content-header">
        <h1>Primary Domain Report</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Primary Domain Dashboard</li>
        </ol>
    </section>
    <?php include ('domain_widget_page.php'); ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header bg-green-active">
                        <a href="../create_domain/index"><img src="/img/icons8-add-row-52.png" alt="Smiley face" height="25" width="25" title="New"></a>
                        <a onclick="exportexcel('_index_primary_domain_table', 'primary_domain_report')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" style="padding-bottom: 50px;" id="_index_primary_domain_table">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th hidden="">Unique ID</th>
                                    <th>Vendor</th>
                                    <th>Account Number</th>
                                    <th>Type</th>
                                    <th>Domain</th>
                                    <th>Expiration Date</th>
                                    <th>Auto-renew</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="_index_primary_report">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_index.js" type="text/javascript"></script>