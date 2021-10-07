<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Vendor Account Logs</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/vendor_report/index_page/index">Vendor Account</a></li>
            <li class="active">Logs</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <?php
                        $logs_button = "SELECT tbl_account_log.status,tbl_accountstatus.id,tbl_accountstatus.statusname from tbl_account_log INNER JOIN tbl_accountstatus on tbl_accountstatus.id = tbl_account_log.status GROUP by tbl_account_log.status";
                if ($logs_button_result = $con->query($logs_button)) {
                    while ($logs_button_row = $logs_button_result->fetch_assoc()) {
                        $field1 = encrypt($logs_button_row['id']);
                        ?>  
                        <li><a href="/vendor_report/logs_page/index?filter=<?php echo $field1; ?>"><?php echo $logs_button_row['statusname']; ?></a></li>
                       <?php
                    }
                }
                ?>
                    </ul>
                </div>
                <div class="box ">
                    <div class="box-header bg-green-active">
                        <a onclick="exportexcel('logs__vendor_account_list', 'vendor_account_list_logs')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form name="frmUser" method="post" action="">
                            <table class="table table-hover" style="padding-bottom: 50px;" id="logs__vendor_account_list">
                                <thead>
                                    <?php
                                    if (isset($_GET['filter'])) {
                                        $filter = $_GET['filter'];
                                        $filter = decrypt($filter);
                                    }
                                    ?>
                                    <tr>
                                        <th>Sl No</th>
                                        <th hidden="">Unique ID</th>
                                        <th>Vendor</th>
                                        <th>Account Number</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Done By</th>
                                        <th>Done on</th>
                                    </tr>
                                </thead>
                                <tbody id="logs__vendor_account">

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_logs.js" type="text/javascript"></script>
